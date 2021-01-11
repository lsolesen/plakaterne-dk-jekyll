---
title: &title "Plakater til børneværelset"
permalink: /bornevaerelse-plakater/
language: da
header:
  overlay_image: https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1909&q=80
  caption: *title
  alt: Photo by i yunmai on Unsplash
  teaser: https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=400&q=80
category:
  - Plakater
tags:
  - børneværelse
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

{% assign posters = site.data.posters | where_exp: "item", "item.title contains 'børneværelse' or item.category contains 'børneværelse'" %}

{% include posters array=posters %}
