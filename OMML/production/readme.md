# Production description

Detailing out the spectacle container results in the following definition for OMML markup:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:production>
    <omml:description>
      ...
    </omml:description>
    
    <omml:program copyright="">
      ...
    </omml:program>
    <omml:program>
      ...
    </omml:program>    
  </omml:production>
</omml:omml>
```

## omml:description
```optional```

Contains a description on the production as a whole

## omml:program copyright
```optional```


# JSON

```
{"omml":{"production":{"copyright":"", "guid":"", "access":"", "src":"", "program":[{"copyright":""},{},{},...]}}}
```


