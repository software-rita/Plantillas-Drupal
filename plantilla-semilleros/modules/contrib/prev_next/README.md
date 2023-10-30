# PREVIOUS/NEXT API

## CONTENTS OF THIS FILE

 - Introduction
 - Requirements
 - Installation
 - Configuration

## INTRODUCTION

This module allows you to know the previous or next nodes for any given node.
This is very useful for providing navigational links to the user without the
expensive queries required to dynamically deduce such information on the fly.

  - For a full description of the module, visit the project page:
  <https://www.drupal.org/project/prev_next>

  - To submit bug reports and feature suggestions, or to track changes:
  <https://www.drupal.org/project/issues/prev_next>


## REQUIREMENTS

This module requires the following modules:

  - Block (Core)


## INSTALLATION

  - Install as you would normally [install a contributed Drupal module](https://www.drupal.org/docs/extending-drupal/installing-modules).


## CONFIGURATION

  - Configure prev/next settings at /admin/config/system/prev-next.


## INSTRUCTIONS

  - Add the Prev/Next block the a region.
  - Ensure the proper configuration is set admin/config/system/prev-next
  - Creating new nodes will auto-index and generate the Prev and Next links.
  - If there were already nodes created see below for indexing instructions.
  - For previously created nodes you will need to bulk save them. Go to your
    content page and under bulk actions select 'Save Content" on all nodes that
    you want to be indexed.
