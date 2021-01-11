---
title: &title "Citatplakater: Plakater med citater"
permalink: /citatplakater-plakater-citater/
language: da
header:
  overlay_image: https://images.unsplash.com/photo-1548438294-1ad5d5f4f063?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1900&q=80
  caption: *title
  alt: Photo by i yunmai on Unsplash
  teaser: https://images.unsplash.com/photo-1548438294-1ad5d5f4f063?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80
category:
  - Plakater
tags:
  - citater
  - citatplakater
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

{% assign posters = site.data.posters | where_exp: "item", "item.title contains 'citatplakater' or item.category contains 'Citatplakater'" %}

{% include posters array=posters %}
