<?php
namespace ezp\PublicAPI\Values\User;


use ezp\PublicAPI\Values\Content\ContentCreate;

/**
 * This class is used to create a new user in the repository
 */
abstract class UserCreate extends ContentCreate {

	/**
	 * User login
	 *
	 * @var string
	 */
	public $login;

	/**
	 * User E-Mail address
	 *
	 * @var string
	 */
	public $email;

	/**
	 * the plain password
	 *
	 * @var string
	 */
	public $password;

	/**
	 *
	 * indicates if the user is enabled after creation
	 * @var boolean
	 */
	public $enabled = true;


}