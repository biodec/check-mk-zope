QUICK START
===========

Zope buildout::

  [buildout]
  find-links =
      ...
      https://github.com/biodec/check-mk-zope/downloads

  [instance]
  eggs =
       ...
       munin.zope >= 1.3dev0

  zcml =
       ...
       munin.zope

  zope-conf-additional =
       <product-config munin.zope>
           secret MYSECRET
       </product-config>

TODO
====
* socket timeout
* package: http://mathias-kettner.de/checkmk_packaging.html
* perfometer: http://mathias-kettner.de/checkmk_devel_perfometer.html
* counter: http://mathias-kettner.de/checkmk_devel_counters.html
* release package(s) on http://exchange.check-mk.org/
* zopememory ...
