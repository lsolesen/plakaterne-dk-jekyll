---
layout: single
title: "Tilbud og udsalg i plakater"
permalink: /plakater-udsalg-tilbud/
language: da
#header:
#  overlay_image: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80
#  caption: Beregn din fedtprocent ud fra højde og vægt.
#  alt: Photo by i yunmai on Unsplash
#  teaser: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80
category:
  - Plakater
tags:
  - tilbud
  - udsalg
last_modified_at: 2021-12-11T23:14:14Z
toc: true
author_profile: true
---

{% assign brands = site.brands %}

Her har vi samlet alle tilbud på plakater fra vores samarbejdspartnere fra {% for b in brands %}{% if forloop.first == true %}{% elsif forloop.last == true %} og {% else %}, {% endif %}[{{ b.title }}]({{ b.url }}){% endfor %}.

## Tilbud på plakater

{% assign posters = site.data.posters | where_exp: "item", "item.old_price > item.price" %}

{% include posters array=posters %}
