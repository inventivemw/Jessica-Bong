<?php if(!defined('KIRBY')) exit ?>

title: Portfolio project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
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
  tags:
    label: Tags
    type:  tags