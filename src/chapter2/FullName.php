<?php
namespace TakanoY\TryDdd\Chapter2;

/**
 * 2-4 氏名を表現するFullNameクラス
 */

final readonly class FullName
{
	public function __construct(
		private string $firstName,
		private string $lastName
	) { }
	
	public function getFirstName(): string
	{
		return $this->firstName;
	}
	
	public function getLastName(): string
	{
		return $this->lastName;
	}
	
	/**
	 * 日本での氏名
	 */
	public function getFullNameInJapan(): string
	{
		return $this->lastName . ' ' . $this->firstName;
	}
	
	/**
	 * 海外での氏名
	 */
	public function getFullNameInGlobal(): string
	{
		return $this->firstName . ' ' . $this->lastName;
	}
}