# Buto-Plugin-DocWord
Render word document.

## Widget
One could set body param as a Buto element or text.

### Body
#### Element
```
type: widget
data:
  plugin: doc/word
  method: doc
  data:
    body:
      -
        type: h1
        innerHTML: 'PluginDocWord example'
      -
        type: p
        innerHTML: 'This is an example of generating ms-word document.'
```

#### Text
```
type: widget
data:
  plugin: doc/word
  method: doc
  data:
    body: 'Example with only text.'
```

### Filename
```
type: widget
data:
  plugin: doc/word
  method: doc
  data:
    filename: example.doc
```
