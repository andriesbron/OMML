# Standalone OMML

Stand alone OMML is contained by the following definition:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:spectacle guid="" access="">
    ...
  </omml:spectacle>
</omml:omml>
```

The standalone OMML container follows in that sense the philosophy of the RSS container which is given by a channel tag wrapped by an rss tag.

## omml:spectacle

The spectacle tag describes a spectacle in the sense of a show, and is a container to a program or a series of programs. A program or a series of programs can be anything, from a meeting in a meeting room, to a meeting in a live theatre, to videos, to livestreams, to radio or audio, to a piece of text. A spectacle in that sense is a description of a more broader phenomena compared to the what one would expect had it been named a "show", hence, spectacle. A spectacle, as such, is a matter to be observed whether seen or heard.

### omml:spectacle guid

The guid tag contains a unique spectacle identifier being the url to the spectacle description, for example, a webpage where the show is introduced in human readable format which might be piggybacked with OMML.

### omml:spectacle access

For robots-purchase
