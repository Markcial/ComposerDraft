<?php

namespace Markcial\Composer;

use Composer\Script\Event;

interface IInstallerDraft
{
	public static function preInstall( Event $event );
	public static function postInstall( Event $event );
	public static function preUpdate( Event $event );
	public static function postUpdate( Event $event );
	public static function prePackageInstall( Event $event );
	public static function postPackageInstall( Event $event );
	public static function prePackageUpdate( Event $event );
	public static function postPackageUpdate( Event $event );
	public static function prePackageUninstall( Event $event );
	public static function postPackageUninstall( Event $event );
}