<?php


/**
 * An image list is a list of links with images, titles, and content/descriptions.
 * Example Usage:
 *   $list = new ImageList();
 *   $list->addItem('/test/', 'myimage.gif', 'My Test Page', '<p>Hello World</p>');
 *   $list->display();
 */
class ImageList {

	/** Optional list element id. */
	protected $id;

	/** Optional class name for images. */
	protected $imageclass;

	/** Which heading tag to use. */
	protected $heading;

	/** List items. */
	private $list = array();

	/**
	 * Create a new ImageList.
	 *
	 * @param $imageclass optional Class to add to the image tag.
	 * @param $id optional element id.
	 * @param $header optional Deprecated.
	 */
	public function __construct($imageclass="", $id=null, $heading=null) {
		$this->imageclass = $imageclass;
		$this->id = $id;

		$this->heading = $heading;
	}

	/**
	 * Add an item to the end of the list.
	 * @param $image url for the image.
	 * @param $title text for the title.
	 * @param $content content for the list item.
	 */
	public function addItem($link, $image, $title, $content) {

		// add default icon if necessary
		//if ($image == null) { $image = "images/icons/report.jpg"; }

		$this->addItemArray(

			array(
				'link' => $link,
				'image' => $image,
				'title' => $title,
				'content' => $content));
	}

	/**
	 * Add an item with an array of parameters.
	 * The parameters values should use these keys
	 *
	 *   link
	 *   image
	 *   title
	 *   content
	 *
	 * @param $array the array of parameters.
	 */
	public function addItemArray($array) {
		$this->list[] = $array;
	}


	/**
	 * Output list as HTML.
	 */
	public function display() {
		if (count($this->list) == 0) {
			return;
		}

		print '<ul class="imagelist"';
		if ($this->id != null) {
			printf(' id="%s"', $this->id);
		}
		print '>';

		foreach ($this->list as $item) {
			$this->displayItem($item);
		}

		print '</ul>';
	}


	/**
	 * Output a single list item.
	 * @param $item the imagelist item to output.
	 */
	public function displayItem($item) {
		print '<li class="imagelist-item"><header class="imagelist-header">';

		//includes link
		if ($item['link'] != '') {
			printf('<a href="%s">', $item['link']);
		}

		if ($this->heading != null) {
			print '<' . $this->heading . '>';
		}

		print '<span class="imagelist-title" title="' . $item['title'] . '">' .
				$item['title'] . '</span>';

		if ($this->heading != null) {
			print '</' . $this->heading . '>';
		}

		//includes image
		if ($item['image'] != '') {
			printf('<img src="%s" class="imagelist-image %s" alt=" "/>',
					$item['image'], $this->imageclass);
		}

		if ($item['link'] != '') {
			print '</a>';
		}

		print '</header><section class="imagelist-content">' .
				$item['content'] . '</section>';

		print '</li>'.PHP_EOL;
	}

}
