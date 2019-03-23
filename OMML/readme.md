# OMML piggybacked or standalone
OMML is intended to be piggybacked on an existing distribution channel, so, for example to be piggybacked on an RSS feed or inside a html site or whatever else. However, if desired, OMML can be used standalone, for example, for distributing content through containers specific to OMML.

Piggybacking OMML has one major advantage, it combines human readability of automated or machined distribution of media.

Take notice that OMML basically does not define any new thing or new definitions but merely integrates existing concepts in an intuitive way.

# standalone OMML

Stand alone OMML is contained by the following definition:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:spectacle>
    ...
  </omml:spectacle>
</omml:omml>
```

The standalone OMML container follows in that sense the philosophy of the RSS container which is given by a channel tag wrapped by an rss tag.
