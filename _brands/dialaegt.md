---
title: &title "Dialægt"
excerpt: "Dialægt laver plakater som er oplagte som gaveideer. Hos dialægt kan du også selv designe dine egne plakater med citater."
permalink: /dialaegt/
image_path: /assets/images/logo/dialaegt.png
language: da
affiliate_url: &affiliate_url https://www.partner-ads.com/dk/klikbanner.php?bannerid=71049&partnerid=28187
header:
  overlay_filter: 0.5
  overlay_image: https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80
  caption: *title
  alt: *title
  teaser: /assets/images/logo/dialaegt.png
  actions:
    - url: *affiliate_url
      label: Besøg Dialægt
      rel: sponsored nofollow noopener
category:
  - Plakater
tags:
  - brand
last_modified_at: 2020-02-11T23:14:14Z
toc: true
---

**{{ page.excerpt }}**

Dialægt skriver om sig selv:

> I Dialægt tror vi på, at den bedste gave man kan give, er den helt personlige gave.
> 
> Vi vil sætte helt nye standarder for den personlige gave. Vores produkter er det oplagte valg til en personlig gave til manden eller kvinden, der har alt, til den færdiguddannede, til mors dag, til de nybagte forældre eller til sølvbrylluppet og den runde fødselsdag.

--- <cite>[Om Dialægt]({{ page.affiliate_url}}&htmlurl=https://dialaegt.dk/pages/about)</cite>

## Plakater fra {{ page.title }}

{% assign posters = site.data.posters | where_exp: "item", "item.vendor contains 'Dialægt'" %}

{% include posters array=posters %}
