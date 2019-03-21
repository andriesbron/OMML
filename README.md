# OMML
Open Media Markup Language is a markup language for automated sharing and distributing of media objects.

# Rationale OMML
OMML is not meant to replace current content distribution means like, for example and not limited to: ordinary websites, RSS feeds, Atom feeds, podcasts or opengraph. Instead, OMML is meant to overcome the limitations of said distribution means. The most important reason for definition of the OMML namespace is that most of the distributing technologies are not able to share and distribute scheduled content. So, why not use a TV guide protocol for that? Because, TV guides are limited to radio and tv shows and, for example, not meant to share location information in case content comes through a hosted event. RSS also has its limitations, for example, the enclosure url is obligued to be an http reference to a media object using a given size. An rtsp stream can therefore not be defined by an enclosure url of an RSS feed.

OMML is a container to distribute and share all the different combinations for content publishing in order to distribute and share that content.

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
