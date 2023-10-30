import requests
import subprocess
import sys

def install():
    subprocess.check_call([sys.executable, "-m", "pip", "install", "bs4"])

try:
    from bs4 import BeautifulSoup
except:
    install()
    from bs4 import BeautifulSoup

import json

def hacer_solicitud(url):
    try:
        response = requests.get(url)
        response.raise_for_status()  # Lanzar una excepción en caso de error HTTP
        return response.text
    except requests.exceptions.RequestException as e:
        print(f'Error al hacer la solicitud HTTP: {e}')
        return None

def extraer_informacion(url):
    contenido = hacer_solicitud(url)

    if contenido:
        soup = BeautifulSoup(contenido, 'html.parser')
        data = soup.find_all('table')
        todosDatos = {}

        for i in range(13, 75):
            articulosPublicados = data[i]
            filas = articulosPublicados.find_all('tr')

            for indice, fila in enumerate(filas):
                if indice == 0:
                    tipo_articulo = fila.text.replace("\n", "")
                else:
                    celdas = fila.find_all('td')
                    diccionario_articulos = {}
                    # Obtener todo el contenido de la fila como texto
                    fila_texto = fila.get_text(separator='\n')
                    for key, celda in enumerate(celdas):
                        if key % 2 == 0:
                            img = celda.find('img')
                            diccionario_articulos['verificacion'] = bool(img)
                        else:
                            contenido = fila_texto.strip()
                            partes = contenido.split('\n', 2)
                            if len(partes) == 3:
                                tipo = partes[1].strip()
                                descripcion = partes[2].strip()
                                diccionario_articulos['tipo'] = tipo.replace(":", "")
                                diccionario_articulos['descripcion'] = descripcion.lstrip(':').replace("\r", "").replace("\n", "").replace("  ", "")
                                if 'tipo' not in diccionario_articulos or 'descripcion' not in diccionario_articulos:
                                    continue  # Saltar este diccionario si falta tipo o descripcion
                            else:
                                print("No se encontraron dos '\n' para dividir el texto.")
                    if diccionario_articulos:
                        if tipo_articulo not in todosDatos:
                            todosDatos[tipo_articulo] = []
                        todosDatos[tipo_articulo].append(diccionario_articulos)

        return todosDatos
    else:
        return None

if __name__ == "__main__":
    url = 'https://scienti.minciencias.gov.co/gruplac/jsp/visualiza/visualizagr.jsp?nro=00000000001734'
    resultado = extraer_informacion(url)

    if resultado:
        # Eliminar diccionarios sin tipo o descripcion
        for tipo_articulo, lista_articulos in resultado.items():
            resultado[tipo_articulo] = [articulo for articulo in lista_articulos if 'tipo' in articulo and 'descripcion' in articulo]

        # Eliminar tipos de artículos con arreglos vacíos
        resultado = {key: value for key, value in resultado.items() if value}

        # Guardar los datos en un archivo JSON
        with open('./modules/custom/RITAproducts/src/Controller/datos.json', 'w', encoding='utf-8') as json_file:
            json.dump(resultado, json_file, ensure_ascii=False, indent=4)
            
        print('Datos guardados en "datos.json".')
    else:
        print('No se pudo acceder al sitio web o no se encontró la información deseada.')

