SCSS Content Patterns
=====================


## Flexible Grid

A flexible grid for columns that can be nested.

### .row

A row contains columns.

```
<div class="row">
  <div class="column one-of-two">first</div>
  <div class="column one-of-four">second</div>
  <div class="column one-of-four">third</div>
</div>
```

#### .right-to-left

A right-to-left row lays out columns from right to left.

```
<div class="right-to-left row">
  <div class="column one-of-five">third</div>
  <div class="column three-of-five">second</div>
  <div class="column one-of-five">first</div>
</div>
```


### .column

A column in a row.


#### column sizes

Column sizes can be mixed and matched, columns will wrap if they add to more than 1.

* \*/1
  .one-of-one

* \*/2
  .one-of-two

* \*/3
  .one-of-three
  .two-of-three

* \*/4
  .one-of-four
  .two-of-four
  .three-of-four

* \*/5
  .one-of-five
  .two-of-five
  .three-of-five
  .four-of-five
