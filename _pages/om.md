---
layout: single
title: "Om plakaterne.dk"
permalink: /om/
language: da
#header:
#  overlay_image: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80
#  caption: Beregn din fedtprocent ud fra højde og vægt.
#  alt: Photo by i yunmai on Unsplash
#  teaser: https://images.unsplash.com/photo-1522844990619-4951c40f7eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80
last_modified_at: 2020-02-11T23:14:14Z
toc: true
author_profile: true
---

{% assign brands = site.brands %}

Her har vi samlet alle tilbud på plakater fra vores samarbejdspartnere fra {% for b in brands %}{% if forloop.first == true %}{% elsif forloop.last == true %} og {% else %}, {% endif %}[{{ b.title }}]({{ b.url }}){% endfor %}.

## Samarbejdspartnere

{% assign brands = site.brands %}

{% include gallery array=brands caption="Vi har samlet plakater fra disse fremragende brands, som leverer plakater og wallstickers i høj kvalitet med hurtig levering og god kundeservice." %}
