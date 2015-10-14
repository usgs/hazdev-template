<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Text Level Semantics';
    $NAVIGATION = true;

    include 'template.inc.php';
  }
?>



<h2>Text-level Semantics</h2>
<p>
  The following list gives you a short overview of the most commonly used text-level semantics and how to utilize them.
</p>
<h3>Example</h3>
<table>
  <thead>
    <tr>
      <th>Element</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>&lt;a&gt;</code></td>
      <td>Turn text into hypertext using the <a href="#">a element</a>.</td>
    </tr>
    <tr>
      <td><code>&lt;em&gt;</code></td>
      <td>Emphasize text using the <em>em element</em>.</td>
    </tr>
    <tr>
      <td><code>&lt;strong&gt;</code></td>
      <td>Imply any extra importance using the <strong>strong element</strong>.</td>
    </tr>
    <tr>
      <td><code>&lt;code&gt;</code></td>
      <td>
        Define inline code snippets using the <code>code element</code>.
      </td>
    </tr>
    <tr>
      <td><code>&lt;mark&gt;</code></td>
      <td>Highlight text with no semantic meaning using the <mark>mark element</mark>.</td>
    </tr>
    <tr>
      <td><code>&lt;abbr&gt;</code></td>
      <td>Define an abbreviation using the <abbr title="Abbreviation Element">abbr element</abbr> with a title.</td>
    </tr>
    <tr>
      <td><code>&lt;small&gt;</code></td>
      <td>De-emphasize text for small print using the <small>small element</small>.</td>
    </tr>
    <tr>
      <td><code>&lt;sup&gt;</code></td>
      <td>Mark up typographical conventions with specific meanings, US<sup>2</sup>.</td>
    </tr>
    <tr>
      <td><code>&lt;sub&gt;</code></td>
      <td>Mark up typographical conventions with specific meanings, US<sub>2</sub>.</td>
    </tr>
  </tbody>
</table>
