magentoCSVCreator
=================

This is a janky solution that is mainly here for me, next time I need it, but if you find it useful, cool! :)

It creates a Magento ready CSV from basic product information. Especially useful for creating tiered pricing structures.

**This is not secure**, do not use in production obviously, and it is not even performance conscious! It serves a purpose for a one time job.

This WILL need tweaking if you are to use it. You will need to (at least):

  - Get the rudimentary information into SQL tables, structure provided.
  - Alter the SQL pricing fields.
  - Alter the SQL pricing fields in the query, (index.php)

[@_JoeKendall]

[@_JoeKendall]: http://twitter.com/_JoeKendall
