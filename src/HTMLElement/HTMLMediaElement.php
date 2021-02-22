<?php
namespace Gt\Dom\HTMLElement;

use Gt\Dom\DOMTokenList;

/**
 * The HTMLMediaElement interface adds to HTMLElement the properties and methods
 * needed to support basic media-related capabilities that are common to audio
 * and video. The HTMLVideoElement and HTMLAudioElement elements both inherit
 * this interface.
 *
 * TODO: A lot of this class's properties are client-side only. Remove the ones
 * that do not fit the server model.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement
 *
 * @property-read AudioTrackList $audioTracks A AudioTrackList that lists the AudioTrack objects contained in the element.
 * @property bool $autoplay A Boolean that reflects the autoplay HTML attribute, indicating whether playback should automatically begin as soon as enough media is available to do so without interruption.
 * @property-read TimeRanges $buffered Returns a TimeRanges object that indicates the ranges of the media source that the browser has buffered (if any) at the moment the buffered property is accessed.
 * @property-read MediaController $controller Is a MediaController object that represents the media controller assigned to the element, or null if none is assigned.
 * @property bool $controls Is a Boolean that reflects the controls HTML attribute, indicating whether user interface items for controlling the resource should be displayed.
 * @property-read DOMTokenList $controlsList Returns a DOMTokenList that helps the user agent select what controls to show on the media element whenever the user agent shows its own set of controls. The DOMTokenList takes one or more of three possible values: nodownload, nofullscreen, and noremoteplayback.
 * @property string $crossOrigin A DOMString indicating the CORS setting for this media element.
 * @property-read string $currentSrc Returns a DOMString with the absolute URL of the chosen media resource.
 * @property float $currentTime A double-precision floating-point value indicating the current playback time in seconds; if the media has not started to play and has not been seeked, this value is the media's initial playback time. Setting this value seeks the media to the new time. The time is specified relative to the media's timeline.
 * @property bool $defaultMuted A Boolean that reflects the muted HTML attribute, which indicates whether the media element's audio output should be muted by default.
 * @property float $defaultPlaybackRate A double indicating the default playback rate for the media.
 * @property bool $disableRemotePlayback A Boolean that sets or returns the remote playback state, indicating whether the media element is allowed to have a remote playback UI.
 * @property-read float $duration A read-only double-precision floating-point value indicating the total duration of the media in seconds. If no media data is available, the returned value is NaN. If the media is of indefinite length (such as streamed live media, a WebRTC call's media, or similar), the value is +Infinity.
 * @property-read bool $ended Returns a Boolean that indicates whether the media element has finished playing.
 * @property-read MediaError $error Returns a MediaError object for the most recent error, or null if there has not been an error.
 * @property bool $loop A Boolean that reflects the loop HTML attribute, which indicates whether the media element should start over when it reaches the end.
 * @property string $mediaGroup A DOMString that reflects the mediagroup HTML attribute, which indicates the name of the group of elements it belongs to. A group of media elements shares a common MediaController.
 * @property bool $muted Is a Boolean that determines whether audio is muted. true if the audio is muted and false otherwise.
 * @property-read int $networkState Returns a unsigned short (enumeration) indicating the current state of fetching the media over the network.
 * @property-read bool $paused Returns a Boolean that indicates whether the media element is paused.
 * @property float $playbackRate Is a double that indicates the rate at which the media is being played back.
 * @property-read TimeRanges $played Returns a TimeRanges object that contains the ranges of the media source that the browser has played, if any.
 * @property string $preload Is a DOMString that reflects the preload HTML attribute, indicating what data should be preloaded, if any. Possible values are: none, metadata, auto.
 * @property-read int $readyState Returns a unsigned short (enumeration) indicating the readiness state of the media.
 * @property-read TimeRanges $seekable Returns a TimeRanges object that contains the time ranges that the user is able to seek to, if any.
 * @property-read bool $seeking Returns a Boolean that indicates whether the media is in the process of seeking to a new position.
 * @property-read string $sinkId Returns a DOMString that is the unique ID of the audio device delivering output, or an empty string if it is using the user agent default. This ID should be one of the MediaDeviceInfo.deviceid values returned from MediaDevices.enumerateDevices(), id-multimedia, or id-communications.
 * @property string $src Is a DOMString that reflects the src HTML attribute, which contains the URL of a media resource to use.
 * @property MediaStream $srcObject Is a MediaStream representing the media to play or that has played in the current HTMLMediaElement, or null if not assigned.
 * @property-read TextTrackList $textTracks Returns the list of TextTrack objects contained in the element.
 * @property-read VideoTrackList $videoTracks Returns the list of VideoTrack objects contained in the element.
 * @property float $volume Is a double indicating the audio volume, from 0.0 (silent) to 1.0 (loudest).
 */
class HTMLMediaElement extends HTMLElement {
	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/audioTracks */
	protected function __prop_get_audioTracks():AudioTrackList {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/autoplay */
	protected function __prop_get_autoplay():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/autplay */
	protected function __prop_set_autoplay(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/buffered */
	protected function __prop_get_buffered():TimeRanges {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/controller */
	protected function __prop_get_controller():MediaController {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/controls */
	protected function __prop_get_controls():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/controls */
	protected function __prop_set_controls(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/controlsList */
	protected function __prop_get_controlsList():DOMTokenList {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/crossOrigin */
	protected function __prop_get_crossOrigin():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/crossOrigin */
	protected function __prop_set_crossOrigin(string $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentSrc */
	protected function __prop_get_currentSrc():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentTime */
	protected function __prop_get_currentTime():float {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentTime */
	protected function __prop_set_currentTime(float $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/defaultMuted */
	protected function __prop_get_defaultMuted():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/defaultMuted */
	protected function __prop_set_defaultMuted(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/defaultPlaybackRate */
	protected function __prop_get_defaultPlaybackRate():float {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/defaultPlaybackRate */
	protected function __prop_set_defaultPlaybackRate(float $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/disableRemotePlayback */
	protected function __prop_get_disableRemotePlayback():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/disableRemotePlayback */
	protected function __prop_set_disableRemotePlayback(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/duration */
	protected function __prop_get_duration():float {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/ended */
	protected function __prop_get_ended():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/error */
	protected function __prop_get_error():MediaError {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/loop */
	protected function __prop_get_loop():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/loop */
	protected function __prop_set_loop(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/mediaGroup */
	protected function __prop_get_mediaGroup():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/mediaGroup */
	protected function __prop_set_mediaGroup(string $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/muted */
	protected function __prop_get_muted():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/muted */
	protected function __prop_set_muted(bool $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/networkState */
	protected function __prop_get_networkState():int {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/paused */
	protected function __prop_get_paused():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/playbackRate */
	protected function __prop_get_playbackRate():float {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/playbackRate */
	protected function __prop_set_playbackRate(float $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/played */
	protected function __prop_get_played():TimeRanges {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/preload */
	protected function __prop_get_preload():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/preload */
	protected function __prop_set_preload(string $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/readyState */
	protected function __prop_get_readyState():int {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/seekable */
	protected function __prop_get_seekable():TimeRanges {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/seeking */
	protected function __prop_get_seeking():bool {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/sinkId */
	protected function __prop_get_sinkId():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/src */
	protected function __prop_get_src():string {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/src */
	protected function __prop_set_src(string $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/srcObject */
	protected function __prop_get_srcObject():MediaStream {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/srcObject */
	protected function __prop_set_srcObject(MediaStream $value):void {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/textTracks */
	protected function __prop_get_textTracks():TextTrackList {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/videoTracks */
	protected function __prop_get_videoTracks():VideoTrackList {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/volume */
	protected function __prop_get_volume():float {

	}

	/** @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/volume */
	protected function __prop_set_volume(float $value):void {

	}
}