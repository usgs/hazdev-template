SCSS Content Patterns
=====================


## Flexible Grid

A flexible grid for columns that can be nested.


SCSS File:
```css
@import "hazdev-template/src/htdocs/css/flexible-grid.scss";
```


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
	<div class="column one-of-two">second</div>
	<div class="column three-of-ten">first</div>
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

* \*/6
	.one-of-six
	.two-of-six
	.three-of-six
	.four-of-six
	.five-of-six

* \*/8
	.one-of-eight
	.two-of-eight
	.three-of-eight
	.four-of-eight
	.five-of-eight
	.six-of-eight
	.seven-of-eight

* \*/10
	.one-of-ten
	.two-of-ten
	.three-of-ten
	.four-of-ten
	.five-of-ten
	.six-of-ten
	.seven-of-ten
	.eight-of-ten
	.nine-of-ten

* \*/12
	.one-of-twelve
	.two-of-twelve
	.three-of-twelve
	.four-of-twelve
	.five-of-twelve
	.six-of-twelve
	.seven-of-twelve
	.eight-of-twelve
	.nine-of-twelve
	.ten-of-twelve
	.eleven-of-twelve
