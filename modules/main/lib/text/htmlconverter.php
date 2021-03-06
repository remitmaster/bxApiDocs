<?php
namespace Bitrix\Main\Text;

class HtmlConverter
	extends Converter
{
	static public function encode($text, $textType = "")
	{
		if (is_object($text))
			return $text;

		$textType = Converter::initTextType($textType);

		if ($textType == Converter::HTML)
			return $text;

		return String::htmlspecialchars($text);
	}

	static public function decode($text, $textType = "")
	{
		if (is_object($text))
			return $text;

		$textType = Converter::initTextType($textType);

		if ($textType == Converter::HTML)
			return $text;

		return String::htmlspecialchars_decode($text);
	}
}
