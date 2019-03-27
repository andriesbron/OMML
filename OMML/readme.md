# Standalone OMML

Stand alone OMML is contained by the following definition:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:production copyright="" guid="" access="">
    ...
  </omml:production>
</omml:omml>
```

The standalone OMML container follows in that sense the philosophy of the RSS container which is given by a channel tag wrapped by an rss tag, however, an OMML container is allowed to contain multiple production elements.

## omml:production

The production tag describes a production in the sense of a show or spectacle, and is a container to a single program or a series of programs. A program or a series of programs can be anything, from a meeting in a meeting room, to a meeting in a live theatre, to videos, to livestreams, to radio or audio or just a piece of text. A production, in that sense, is a description of a more broader phenomena compared to the what one would expect had it been named a "show", hence, production. A production, as such, is a matter to be observed whether seen or heard, more important, a production has a copyright.

### omml:production copyright

Sets the copyright for the whole production. Parts of a production, for example, a program, can have their own copyright, however, in case a program has its own copyright, it must be the same copyright or a more open copyright. A production is therefore protected by the copyright provided through the production element. 

### omml:production guid

The guid tag contains a unique production identifier being the url to the production description, for example, a webpage where the show is introduced in human readable format which itself might be piggybacked with OMML.

### omml:production access

@todo For robots-purchasing and subscribe


