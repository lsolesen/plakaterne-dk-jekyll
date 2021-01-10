---
title: "Cykelplakater: Plakater til cykelrytteren"
permalink: /cykelrytter-cykling-plakater/
language: da
#header:
#  overlay_image: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80
#  caption: Beregn din fedtprocent ud fra højde og vægt.
#  alt: Photo by i yunmai on Unsplash
#  teaser: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80
category:
  - Plakater
tags:
  - anatomi
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

{% assign feature_id = '33220854' %}
{% assign poster = site.data.featured_posters | where_exp: "item", "item.id == feature_id" %}

{% include poster array=poster type="left" %}

## Alle plakater med cykling, cykel og cykelryttere

{% assign posters = site.data.posters | where_exp: "item", "item.title contains 'Cykel' or item.category contains 'Cykling'" %}

{% include posters array=posters %}
