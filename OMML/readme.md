# Standalone OMML

Stand alone OMML is contained by the following definition:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:production copyright="" guid="" access="" src="">
    ...
  </omml:production>
</omml:omml>
```

The standalone OMML container follows in that sense the philosophy of the RSS container which is given by a channel tag wrapped by an rss tag, however, an OMML container is allowed to contain multiple production elements.
It is also allowed to leave the production element empty, meaning, without containing program description.

## omml:production
```mandatory```

The production tag describes a production in the sense of a show or spectacle, and is a container to a single program or a series of programs. A program or a series of programs can be anything, from a meeting in a meeting room, to a meeting in a live theatre, to videos, to livestreams, to radio or audio or just a piece of text. A production, in that sense, is a description of a more broader phenomena compared to the what one would expect had it been named a "show", hence, production. A production, as such, is a matter to be observed whether seen or heard, more important, a production has a copyright.

### omml:production guid
```mandatory```

The guid tag contains a unique production identifier being the url to the production description, for example, a webpage where the show is introduced or can be obtained. The info element must be in human readable format which itself might be piggybacked with OMML.

### omml:production src
```optional```

Provides the url through which the production is obtained. If a production has restricted access, the src element should be omitted. In case the production comprises a podcast or an rss feed, src contains the podcast url or rss feed url. The source element makes less sense if the whole production is contained by the production element, in that case should the src url point to itself and can be omitted. As such, a src either points to itself or an external url. As a result can the production container be used to distribute links to productions without the need to contain these productions.

### omml:production copyright
```mandatory```

Sets the copyright for the whole production. Parts of a production, for example, a program, can have their own copyright, however, in case a program has its own copyright, it must be the same copyright or a more open copyright. A production is therefore protected by the copyright provided through the production element. 

### omml:production access
```mandatory```

Parts of a production can have their own access profile, which, similar to the copyright, must always be a more open access. Doing so, the access of a production is protected through the access level given in the production tag.

Currently allowed access levels are:
- public
- registered
- subscription
- contact

#### Rationale
The "registered" access level means that a viewer has to take lead through following a one time registering process upon which access to the production is gained. The one time registration can be either for "free" or a fee. 

Access must be set to "subscription" in case a repeating fee is required.

The "contact" access level requires an entity to contact the production owner in order to inform on how to gain access to the production. This can be used for promotional purposes or distributing the knowledge on the availability of a particular production.


# JSON

```
{'omml':{'production':{'copyright':'', 'guid':'', 'access':'', 'src':''}}}
```
