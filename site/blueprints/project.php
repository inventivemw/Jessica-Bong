<?php if(!defined('KIRBY')) exit ?>

title: Portfolio project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
  categories:
    label: Categories
    type: checkboxes
    options:
      corporate-design: Corporate design
      illustration: Illustration
      logo: Logo design
      photography: Photography
      web: Web design
  year:
    label: Year
    type: text
    width: 1/2
  website:
    label: Website
    type: url
    width: 1/2
  text:
    label: Text
    type: textarea