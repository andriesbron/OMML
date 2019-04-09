# Production description

Detailing out the spectacle container results in the following definition for OMML markup:

```
<?xml version="1.0" encoding="UTF-8"?>
<omml:omml>
  <omml:production>
    <omml:title>...</omml:title>
    <omml:description>...</omml:description>
    
    
    <omml:program copyright="">
      ...
    </omml:program>
    
    
    <omml:program>
      ...
    </omml:program>    
  </omml:production>
</omml:omml>
```

## omml:title
```mandatory```

Title of the production (series as a whole)

## omml:description
```mandatory```

Description on the production as a whole

## omml:program copyright
```mandatory```


# JSON

```
{"omml":{"production":{"copyright":"", "guid":"", "access":"", "src":"", "program":[{"copyright":""},{},{},...]}}}
```


