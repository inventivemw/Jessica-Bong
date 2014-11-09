<?php if(!defined('KIRBY')) exit ?>

title: Portfolio project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
    width: 3/4
  year:
    label: Year
    type: text
    width: 1/4
    icon: calendar
  text:
    label: Text
    type: textarea
    width: 1/2
    required: true
  categories:
    label: Categories
    type: checkboxes
    width: 1/2
    options:
      Identity Design: Identity Design
      Poster Design: Poster Design
      Type Design: Type Design
      Publication Design: Publication Design
      Packaging Design: Packaging Design
      Illustration: Illustration
  tags:
    label: Tags
    type:  tags
    required: true
  website:
    label: Website
    type: url
    width: 1/2
  vimeo:
    label: Vimeo
    type:  text
    placeholder: Vimeo ID number 
    width: 1/2
    icon: vimeo-square