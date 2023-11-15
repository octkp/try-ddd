<?php
namespace TakanoY\TryDdd\Chapter2;

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
	
	public function getFullNameInJapan(): string
	{
		return $this->lastName . ' ' . $this->firstName;
	}
	
	public function getFullNameInGlobal(): string
	{
		return $this->firstName . ' ' . $this->lastName;
	}
}