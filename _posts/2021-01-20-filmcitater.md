---
title: &title "Filmcitater: Plakater med citater fra film på filmplakater"
permalink: /film-plakater-filmcitater/
language: da
header:
  overlay_image: https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80
  caption: *title
  alt: Photo by i yunmai on Unsplash
  teaser: https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80
category:
  - Plakater
tags:
  - film
  - filmcitater
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

{% assign posters = site.data.posters | where_exp: "item", "item.title contains 'film' or item.category contains 'film'" %}

{% include posters array=posters %}
