---
title: &title "Citatplakat.dk"
excerpt: "Citatplakat.dk gengiver tidens sjoveste danske citater på plakater. Citatplakat.dk vil bringe et smilene frem på folks læber med deres unikke plakater med bl.a. filmcitater."
permalink: /citatplakat/
image_path: /assets/images/logo/citatplakat.jpg
affiliate_url: &affiliate_url https://www.partner-ads.com/dk/klikbanner.php?bannerid=71238&partnerid=28187
language: da
header:
  overlay_filter: 0.5
  overlay_image: https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80
  caption: *title
  alt: *title
  teaser: /assets/images/logo/citatplakat.jpg
  actions:
    - url: *affiliate_url
      label: "Besøg Citatplakat"
      rel: sponsored nofollow noopener
category:
  - Plakater
tags:
  - brand
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

**{{ page.excerpt }}**

Citatplakat.dk skriver om sig selv:

> Citatplakat.dk gengiver tidens sjoveste danske citater på plakater. Konceptet er skabt for at bringe et smil på folks læber. Alle plakaterne bygget op om de sjoveste danske citater, og i overvejende grad om såkaldte catchphrases. Catchphrases er let genkendelige og ofte humoristiske citater, der spredes viralt og ofte bliver “adopteret” og brugt i daglig tale. Via den simple grafiske opsætning, ledes folks tanker hen på citatets oprindelse.

--- <cite>[Om Citatplakat.dk]({{ page.affiliate_url}}&htmlurl=https://citatplakat.dk/om-citatplakat/)</cite>

## Oversigt over plakater fra Citatplakat.dk

{% assign posters = site.data.posters | where_exp: "item", "item.vendor contains 'Citatplakat.dk'" %}

{% include posters array=posters %}
