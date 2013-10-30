contao-logintags
================

Contao module that adds insert-tags for checking if member or backend user is logged in.

Availiable insert-tags and usage
================================

`{{if::member}}Member{{endif::member}}`

It will show text `Member` if current visitor is a member;

`{{ifn::member}}Is not a Member{{endifn::member}}` 

It will show text `Is not a Member` if current visitor is not a member;

`{{if::user}}Backend User{{endif::user}}` 

It will show text `Backend User` if current visitor is backend user;

`{{ifn::user}}Is not a Backend User{{endifn::user}}` 

It will show text `Is not a Backend User` if current visitor is not a backend user;

`{{if::guest}}Guest{{endif::guest}}` 

It will show text `Guest` if current visitor is a guest. Visitor is not a member and not a backend user;

`{{ifn::guest}}Is not a Guest{{endifn::guest}}` 

It will show text `Is not a Guest` if current visitor is not a guest. Visitor could be a member or a backend user;
