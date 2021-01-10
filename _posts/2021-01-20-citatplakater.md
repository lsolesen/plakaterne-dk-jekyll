---
title: "Citatplakater: Plakater med citater"
permalink: /citatplakater-plakater-citater/
language: da
#header:
#  overlay_image: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80
#  caption: Beregn din fedtprocent ud fra højde og vægt.
#  alt: Photo by i yunmai on Unsplash
#  teaser: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80
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
