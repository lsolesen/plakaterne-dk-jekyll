---
title: &title "Wowo"
excerpt: "Wowo.dk er en webshop med wallstickers og plakater. Størstedelen af vores produkter er egne designs og dermed helt unikke og kun kan købes på wowo.dk. Langt de fleste af vores produkter, producerer vi i øvrigt selv."
permalink: /wowo/
image_path: https://www.partner-ads.com/dk/visbanner.php?partnerid=28187&bannerid=90519
language: da
affiliate_url: &affiliate_url https://www.partner-ads.com/dk/klikbanner.php?partnerid=28187&bannerid=90743
header:
  overlay_filter: 0.5
  overlay_image: https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80
  caption: *title
  alt: *title
  teaser: https://www.partner-ads.com/dk/visbanner.php?partnerid=28187&bannerid=90519
  actions:
    - url: *affiliate_url
      label: Besøg Wowo
      rel: sponsored nofollow noopener
category:
  - Plakater
tags:
  - anatomi
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

**{{ page.excerpt }}**

Koden `10wowo` giver 10% rabat på alt. Gælder som minimum indtil 01/07-22.

## Plakater fra {{ page.title }}

{% assign posters = site.data.posters | where_exp: "item", "item.vendor contains 'Wowo'" %}

{% include posters array=posters %}
