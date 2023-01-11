<?php
	
	namespace FasoDev\SimpleCurlClient\Curl;
	
	use const CURLOPT_FILE;
	
	class CurlClientBuilder
	{
		private array $options = [];
		
		private function __construct()
		{
			$this->options = [];
		}
		
		public static function create(): self
		{
			return new self();
		}
		
		public function build(): CurlClient
		{
			return CurlClient::client($this->options);
		}
		
		public function defineAutoreferer($optionValue): self
		{
			$this->options[CURLOPT_AUTOREFERER] = $optionValue;
			return $this;
		}
		
		public function defineBuffersize($optionValue): self
		{
			$this->options[CURLOPT_BUFFERSIZE] = $optionValue;
			return $this;
		}
		
		public function defineCaInfo($optionValue): self
		{
			$this->options[CURLOPT_CAINFO] = $optionValue;
			return $this;
		}
		
		public function defineCaPath($optionValue): self
		{
			$this->options[CURLOPT_CAPATH] = $optionValue;
			return $this;
		}
		
		public function defineConnectTimeOut($optionValue): self
		{
			$this->options[CURLOPT_CONNECTTIMEOUT] = $optionValue;
			return $this;
		}
		
		public function defineCookie($optionValue): self
		{
			$this->options[CURLOPT_COOKIE] = $optionValue;
			return $this;
		}
		
		public function defineCookieFile($optionValue): self
		{
			$this->options[CURLOPT_COOKIEFILE] = $optionValue;
			return $this;
		}
		
		public function defineCookieJar($optionValue): self
		{
			$this->options[CURLOPT_COOKIEJAR] = $optionValue;
			return $this;
		}
		
		public function defineCookieSession($optionValue): self
		{
			$this->options[CURLOPT_COOKIESESSION] = $optionValue;
			return $this;
		}
		
		public function defineCrlf($optionValue): self
		{
			$this->options[CURLOPT_CRLF] = $optionValue;
			return $this;
		}
		
		public function defineDnsCacheTimeout($optionValue): self
		{
			$this->options[CURLOPT_DNS_CACHE_TIMEOUT] = $optionValue;
			return $this;
		}
		
		public function defineDnsUseGlobalCache($optionValue): self
		{
			$this->options[CURLOPT_DNS_USE_GLOBAL_CACHE] = $optionValue;
			return $this;
		}
		
		public function defineEgdSocket($optionValue): self
		{
			$this->options[CURLOPT_EGDSOCKET] = $optionValue;
			return $this;
		}
		
		public function defineEncoding($optionValue): self
		{
			$this->options[CURLOPT_ENCODING] = $optionValue;
			return $this;
		}
		
		public function defineFailOnError($optionValue): self
		{
			$this->options[CURLOPT_FAILONERROR] = $optionValue;
			return $this;
		}
		
		public function defineFile($optionValue): self
		{
			$this->options[CURLOPT_FILE] = $optionValue;
			return $this;
		}
		
		public function defineFiletime($optionValue): self
		{
			$this->options[CURLOPT_FILETIME] = $optionValue;
			return $this;
		}
		
		public function defineFollowlocation($optionValue): self
		{
			$this->options[CURLOPT_FOLLOWLOCATION] = $optionValue;
			return $this;
		}
		
		public function defineForbidReuse($optionValue): self
		{
			$this->options[CURLOPT_FORBID_REUSE] = $optionValue;
			return $this;
		}
		
		public function defineFreshConnect($optionValue): self
		{
			$this->options[CURLOPT_FRESH_CONNECT] = $optionValue;
			return $this;
		}
		
		public function defineFtpAppend($optionValue): self
		{
			$this->options[CURLOPT_FTPAPPEND] = $optionValue;
			return $this;
		}
		
		public function defineFtpListOnly($optionValue): self
		{
			$this->options[CURLOPT_FTPLISTONLY] = $optionValue;
			return $this;
		}
		
		public function defineFtpPort($optionValue): self
		{
			$this->options[CURLOPT_FTPPORT] = $optionValue;
			return $this;
		}
		
		public function defineFtpUseEprt($optionValue): self
		{
			$this->options[CURLOPT_FTP_USE_EPRT] = $optionValue;
			return $this;
		}
		
		public function defineFtpUseEpsv($optionValue): self
		{
			$this->options[CURLOPT_FTP_USE_EPSV] = $optionValue;
			return $this;
		}
		
		public function defineHeader($optionValue): self
		{
			$this->options[CURLOPT_HEADER] = $optionValue;
			return $this;
		}
		
		public function defineHeaderFunction(callable $optionValue): self
		{
			$this->options[CURLOPT_HEADERFUNCTION] = $optionValue;
			return $this;
		}
		
		public function defineHttp200Aliases($optionValue): self
		{
			$this->options[CURLOPT_HTTP200ALIASES] = $optionValue;
			return $this;
		}
		
		public function defineHttpGet($optionValue): self
		{
			$this->options[CURLOPT_HTTPGET] = $optionValue;
			return $this;
		}
		
		public function defineHttpHeader($optionValue): self
		{
			$this->options[CURLOPT_HTTPHEADER] = $optionValue;
			return $this;
		}
		
		public function defineHttpProxytunnel($optionValue): self
		{
			$this->options[CURLOPT_HTTPPROXYTUNNEL] = $optionValue;
			return $this;
		}
		
		public function defineHttpVersion($optionValue): self
		{
			$this->options[CURLOPT_HTTP_VERSION] = $optionValue;
			return $this;
		}
		
		public function defineInFile($optionValue): self
		{
			$this->options[CURLOPT_INFILE] = $optionValue;
			return $this;
		}
		
		public function defineInfileSize($optionValue): self
		{
			$this->options[CURLOPT_INFILESIZE] = $optionValue;
			return $this;
		}
		
		public function defineInterface($optionValue): self
		{
			$this->options[CURLOPT_INTERFACE] = $optionValue;
			return $this;
		}
		
		public function defineKrb4Level($optionValue): self
		{
			$this->options[CURLOPT_KRB4LEVEL] = $optionValue;
			return $this;
		}
		
		public function defineLowSpeedLimit($optionValue): self
		{
			$this->options[CURLOPT_LOW_SPEED_LIMIT] = $optionValue;
			return $this;
		}
		
		public function defineLowSpeedTime($optionValue): self
		{
			$this->options[CURLOPT_LOW_SPEED_TIME] = $optionValue;
			return $this;
		}
		
		public function defineMaxConnects($optionValue): self
		{
			$this->options[CURLOPT_MAXCONNECTS] = $optionValue;
			return $this;
		}
		
		public function defineMaxRedirs($optionValue): self
		{
			$this->options[CURLOPT_MAXREDIRS] = $optionValue;
			return $this;
		}
		
		public function defineNetrc($optionValue): self
		{
			$this->options[CURLOPT_NETRC] = $optionValue;
			return $this;
		}
		
		public function defineNobody($optionValue): self
		{
			$this->options[CURLOPT_NOBODY] = $optionValue;
			return $this;
		}
		
		public function defineNoProgress($optionValue): self
		{
			$this->options[CURLOPT_NOPROGRESS] = $optionValue;
			return $this;
		}
		
		public function defineNoSignal($optionValue): self
		{
			$this->options[CURLOPT_NOSIGNAL] = $optionValue;
			return $this;
		}
		
		public function definePort($optionValue): self
		{
			$this->options[CURLOPT_PORT] = $optionValue;
			return $this;
		}
		
		public function definePost($optionValue): self
		{
			$this->options[CURLOPT_POST] = $optionValue;
			return $this;
		}
		
		public function definePostQuote($optionValue): self
		{
			$this->options[CURLOPT_POSTQUOTE] = $optionValue;
			return $this;
		}
		
		public function definePreQuote($optionValue): self
		{
			$this->options[CURLOPT_PREQUOTE] = $optionValue;
			return $this;
		}
		
		public function definePrivate($optionValue): self
		{
			$this->options[CURLOPT_PRIVATE] = $optionValue;
			return $this;
		}
		
		public function defineProgressFunction(callable $optionValue): self
		{
			$this->options[CURLOPT_PROGRESSFUNCTION] = $optionValue;
			return $this;
		}
		
		public function defineProxy($optionValue): self
		{
			$this->options[CURLOPT_PROXY] = $optionValue;
			return $this;
		}
		
		public function defineProxyPort($optionValue): self
		{
			$this->options[CURLOPT_PROXYPORT] = $optionValue;
			return $this;
		}
		
		public function defineProxyType($optionValue): self
		{
			$this->options[CURLOPT_PROXYTYPE] = $optionValue;
			return $this;
		}
		
		public function defineProxyUserPwd($optionValue): self
		{
			$this->options[CURLOPT_PROXYUSERPWD] = $optionValue;
			return $this;
		}
		
		public function definePut($optionValue): self
		{
			$this->options[CURLOPT_PUT] = $optionValue;
			return $this;
		}
		
		public function defineQuote($optionValue): self
		{
			$this->options[CURLOPT_QUOTE] = $optionValue;
			return $this;
		}
		
		public function defineRandomFile($optionValue): self
		{
			$this->options[CURLOPT_RANDOM_FILE] = $optionValue;
			return $this;
		}
		
		public function defineRange($optionValue): self
		{
			$this->options[CURLOPT_RANGE] = $optionValue;
			return $this;
		}
		
		public function defineReadData($optionValue): self
		{
			$this->options[CURLOPT_READDATA] = $optionValue;
			return $this;
		}
		
		public function defineReadFunction($optionValue): self
		{
			$this->options[CURLOPT_READFUNCTION] = $optionValue;
			return $this;
		}
		
		public function defineReferer($optionValue): self
		{
			$this->options[CURLOPT_REFERER] = $optionValue;
			return $this;
		}
		
		public function defineResumeFrom($optionValue): self
		{
			$this->options[CURLOPT_RESUME_FROM] = $optionValue;
			return $this;
		}
		
		public function defineReturnTransfer($optionValue): self
		{
			$this->options[CURLOPT_RETURNTRANSFER] = $optionValue;
			return $this;
		}
		
		public function defineShare($optionValue): self
		{
			$this->options[CURLOPT_SHARE] = $optionValue;
			return $this;
		}
		
		public function defineSslCert($optionValue): self
		{
			$this->options[CURLOPT_SSLCERT] = $optionValue;
			return $this;
		}
		
		public function defineSslCertPasswd($optionValue): self
		{
			$this->options[CURLOPT_SSLCERTPASSWD] = $optionValue;
			return $this;
		}
		
		public function defineSslCertType($optionValue): self
		{
			$this->options[CURLOPT_SSLCERTTYPE] = $optionValue;
			return $this;
		}
		
		public function defineSslEngine($optionValue): self
		{
			$this->options[CURLOPT_SSLENGINE] = $optionValue;
			return $this;
		}
		
		public function defineSslEngineDefault($optionValue): self
		{
			$this->options[CURLOPT_SSLENGINE_DEFAULT] = $optionValue;
			return $this;
		}
		
		public function defineSslKey($optionValue): self
		{
			$this->options[CURLOPT_SSLKEY] = $optionValue;
			return $this;
		}
		
		public function defineSslKeyPasswd($optionValue): self
		{
			$this->options[CURLOPT_SSLKEYPASSWD] = $optionValue;
			return $this;
		}
		
		public function defineSslKeyType($optionValue): self
		{
			$this->options[CURLOPT_SSLKEYTYPE] = $optionValue;
			return $this;
		}
		
		public function defineSslVersion($optionValue): self
		{
			$this->options[CURLOPT_SSLVERSION] = $optionValue;
			return $this;
		}
		
		public function defineSslCipherList($optionValue): self
		{
			$this->options[CURLOPT_SSL_CIPHER_LIST] = $optionValue;
			return $this;
		}
		
		public function defineSslVerifyHost($optionValue): self
		{
			$this->options[CURLOPT_SSL_VERIFYHOST] = $optionValue;
			return $this;
		}
		
		public function defineSslVerifyPeer($optionValue): self
		{
			$this->options[CURLOPT_SSL_VERIFYPEER] = $optionValue;
			return $this;
		}
		
		public function defineStderr($optionValue): self
		{
			$this->options[CURLOPT_STDERR] = $optionValue;
			return $this;
		}
		
		public function defineTelnetOptions($optionValue): self
		{
			$this->options[CURLOPT_TELNETOPTIONS] = $optionValue;
			return $this;
		}
		
		public function defineTimeCondition($optionValue): self
		{
			$this->options[CURLOPT_TIMECONDITION] = $optionValue;
			return $this;
		}
		
		public function defineTimeout($optionValue): self
		{
			$this->options[CURLOPT_TIMEOUT] = $optionValue;
			return $this;
		}
		
		public function defineTimeValue($optionValue): self
		{
			$this->options[CURLOPT_TIMEVALUE] = $optionValue;
			return $this;
		}
		
		public function defineTransferText($optionValue): self
		{
			$this->options[CURLOPT_TRANSFERTEXT] = $optionValue;
			return $this;
		}
		
		public function defineUnrestrictedAuth($optionValue): self
		{
			$this->options[CURLOPT_UNRESTRICTED_AUTH] = $optionValue;
			return $this;
		}
		
		public function defineUpload($optionValue): self
		{
			$this->options[CURLOPT_UPLOAD] = $optionValue;
			return $this;
		}
		
		public function defineUserAgent($optionValue): self
		{
			$this->options[CURLOPT_USERAGENT] = $optionValue;
			return $this;
		}
		
		public function defineUserPwd($optionValue): self
		{
			$this->options[CURLOPT_USERPWD] = $optionValue;
			return $this;
		}
		
		public function defineVerbose($optionValue): self
		{
			$this->options[CURLOPT_VERBOSE] = $optionValue;
			return $this;
		}
		
		public function defineWriteFunction($optionValue): self
		{
			$this->options[CURLOPT_WRITEFUNCTION] = $optionValue;
			return $this;
		}
		
		public function defineWriteHeader($optionValue): self
		{
			$this->options[CURLOPT_WRITEHEADER] = $optionValue;
			return $this;
		}
		
		public function defineHttpAuth($optionValue): self
		{
			$this->options[CURLOPT_HTTPAUTH] = $optionValue;
			return $this;
		}
		
		public function defineFtpCreateMissingDirs($optionValue): self
		{
			$this->options[CURLOPT_FTP_CREATE_MISSING_DIRS] = $optionValue;
			return $this;
		}
		
		public function defineProxyAuth($optionValue): self
		{
			$this->options[CURLOPT_PROXYAUTH] = $optionValue;
			return $this;
		}
		
		public function defineFtpResponseTimeout($optionValue): self
		{
			$this->options[CURLOPT_FTP_RESPONSE_TIMEOUT] = $optionValue;
			return $this;
		}
		
		public function defineIpResolve($optionValue): self
		{
			$this->options[CURLOPT_IPRESOLVE] = $optionValue;
			return $this;
		}
		
		public function defineMaxFileSize($optionValue): self
		{
			$this->options[CURLOPT_MAXFILESIZE] = $optionValue;
			return $this;
		}
		
		public function defineNetrcFile($optionValue): self
		{
			$this->options[CURLOPT_NETRC_FILE] = $optionValue;
			return $this;
		}
		
		public function defineTcpNodelay($optionValue): self
		{
			$this->options[CURLOPT_TCP_NODELAY] = $optionValue;
			return $this;
		}
		
		public function defineFtpSslAuth($optionValue): self
		{
			$this->options[CURLOPT_FTPSSLAUTH] = $optionValue;
			return $this;
		}
		
		public function defineFtpAccount($optionValue): self
		{
			$this->options[CURLOPT_FTP_ACCOUNT] = $optionValue;
			return $this;
		}
		
		public function defineCookieList($optionValue): self
		{
			$this->options[CURLOPT_COOKIELIST] = $optionValue;
			return $this;
		}
		
		public function defineIgnoreContentLength($optionValue): self
		{
			$this->options[CURLOPT_IGNORE_CONTENT_LENGTH] = $optionValue;
			return $this;
		}
		
		public function defineFtpSkipPasvIp($optionValue): self
		{
			$this->options[CURLOPT_FTP_SKIP_PASV_IP] = $optionValue;
			return $this;
		}
		
		public function defineFtpFileMethod($optionValue): self
		{
			$this->options[CURLOPT_FTP_FILEMETHOD] = $optionValue;
			return $this;
		}
		
		public function defineConnectOnly($optionValue): self
		{
			$this->options[CURLOPT_CONNECT_ONLY] = $optionValue;
			return $this;
		}
		
		public function defineLocalPort($optionValue): self
		{
			$this->options[CURLOPT_LOCALPORT] = $optionValue;
			return $this;
		}
		
		public function defineLocalPortRange($optionValue): self
		{
			$this->options[CURLOPT_LOCALPORTRANGE] = $optionValue;
			return $this;
		}
		
		public function defineFtpAlternativeToUser($optionValue): self
		{
			$this->options[CURLOPT_FTP_ALTERNATIVE_TO_USER] = $optionValue;
			return $this;
		}
		
		public function defineMaxRecvSpeedLarge($optionValue): self
		{
			$this->options[CURLOPT_MAX_RECV_SPEED_LARGE] = $optionValue;
			return $this;
		}
		
		public function defineMaxSendSpeedLarge($optionValue): self
		{
			$this->options[CURLOPT_MAX_SEND_SPEED_LARGE] = $optionValue;
			return $this;
		}
		
		public function defineSslSessionidCache($optionValue): self
		{
			$this->options[CURLOPT_SSL_SESSIONID_CACHE] = $optionValue;
			return $this;
		}
		
		public function defineFtpSslCcc($optionValue): self
		{
			$this->options[CURLOPT_FTP_SSL_CCC] = $optionValue;
			return $this;
		}
		
		public function defineSshAuthTypes($optionValue): self
		{
			$this->options[CURLOPT_SSH_AUTH_TYPES] = $optionValue;
			return $this;
		}
		
		public function defineSshPrivateKeyFile($optionValue): self
		{
			$this->options[CURLOPT_SSH_PRIVATE_KEYFILE] = $optionValue;
			return $this;
		}
		
		public function defineSshPublicKeyFile($optionValue): self
		{
			$this->options[CURLOPT_SSH_PUBLIC_KEYFILE] = $optionValue;
			return $this;
		}
		
		public function defineConnectTimeOutMs($optionValue): self
		{
			$this->options[CURLOPT_CONNECTTIMEOUT_MS] = $optionValue;
			return $this;
		}
		
		public function defineHttpContentDecoding($optionValue): self
		{
			$this->options[CURLOPT_HTTP_CONTENT_DECODING] = $optionValue;
			return $this;
		}
		
		public function defineHttpTransferDecoding($optionValue): self
		{
			$this->options[CURLOPT_HTTP_TRANSFER_DECODING] = $optionValue;
			return $this;
		}
		
		public function defineTimeoutMs($optionValue): self
		{
			$this->options[CURLOPT_TIMEOUT_MS] = $optionValue;
			return $this;
		}
		
		public function defineKrbLevel($optionValue): self
		{
			$this->options[CURLOPT_KRBLEVEL] = $optionValue;
			return $this;
		}
		
		public function defineNewDirectoryPerms($optionValue): self
		{
			$this->options[CURLOPT_NEW_DIRECTORY_PERMS] = $optionValue;
			return $this;
		}
		
		public function defineNewFilePerms($optionValue): self
		{
			$this->options[CURLOPT_NEW_FILE_PERMS] = $optionValue;
			return $this;
		}
		
		public function defineAppend($optionValue): self
		{
			$this->options[CURLOPT_APPEND] = $optionValue;
			return $this;
		}
		
		public function defineDirListOnly($optionValue): self
		{
			$this->options[CURLOPT_DIRLISTONLY] = $optionValue;
			return $this;
		}
		
		public function defineUseSsl($optionValue): self
		{
			$this->options[CURLOPT_USE_SSL] = $optionValue;
			return $this;
		}
		
		public function defineSshHostPublicKeyMd5($optionValue): self
		{
			$this->options[CURLOPT_SSH_HOST_PUBLIC_KEY_MD5] = $optionValue;
			return $this;
		}
		
		public function defineProxyTransferMode($optionValue): self
		{
			$this->options[CURLOPT_PROXY_TRANSFER_MODE] = $optionValue;
			return $this;
		}
		
		public function defineAddressScope($optionValue): self
		{
			$this->options[CURLOPT_ADDRESS_SCOPE] = $optionValue;
			return $this;
		}
		
		public function defineCrlFile($optionValue): self
		{
			$this->options[CURLOPT_CRLFILE] = $optionValue;
			return $this;
		}
		
		public function defineIssuerCert($optionValue): self
		{
			$this->options[CURLOPT_ISSUERCERT] = $optionValue;
			return $this;
		}
		
		public function defineKeyPasswd($optionValue): self
		{
			$this->options[CURLOPT_KEYPASSWD] = $optionValue;
			return $this;
		}
		
		public function defineCertInfo($optionValue): self
		{
			$this->options[CURLOPT_CERTINFO] = $optionValue;
			return $this;
		}
		
		public function definePassword($optionValue): self
		{
			$this->options[CURLOPT_PASSWORD] = $optionValue;
			return $this;
		}
		
		public function definePostRedir($optionValue): self
		{
			$this->options[CURLOPT_POSTREDIR] = $optionValue;
			return $this;
		}
		
		public function defineProxyPassword($optionValue): self
		{
			$this->options[CURLOPT_PROXYPASSWORD] = $optionValue;
			return $this;
		}
		
		public function defineProxyUsername($optionValue): self
		{
			$this->options[CURLOPT_PROXYUSERNAME] = $optionValue;
			return $this;
		}
		
		public function defineUsername($optionValue): self
		{
			$this->options[CURLOPT_USERNAME] = $optionValue;
			return $this;
		}
		
		public function defineNoProxy($optionValue): self
		{
			$this->options[CURLOPT_NOPROXY] = $optionValue;
			return $this;
		}
		
		public function defineProtocols($optionValue): self
		{
			$this->options[CURLOPT_PROTOCOLS] = $optionValue;
			return $this;
		}
		
		public function defineRedirProtocols($optionValue): self
		{
			$this->options[CURLOPT_REDIR_PROTOCOLS] = $optionValue;
			return $this;
		}
		
		public function defineSocks5GssApiNec($optionValue): self
		{
			$this->options[CURLOPT_SOCKS5_GSSAPI_NEC] = $optionValue;
			return $this;
		}
		
		public function defineTftpBlkSize($optionValue): self
		{
			$this->options[CURLOPT_TFTP_BLKSIZE] = $optionValue;
			return $this;
		}
		
		public function defineSshKnownHosts($optionValue): self
		{
			$this->options[CURLOPT_SSH_KNOWNHOSTS] = $optionValue;
			return $this;
		}
		
		public function defineFtpUsePret($optionValue): self
		{
			$this->options[CURLOPT_FTP_USE_PRET] = $optionValue;
			return $this;
		}
		
		public function defineMailFrom($optionValue): self
		{
			$this->options[CURLOPT_MAIL_FROM] = $optionValue;
			return $this;
		}
		
		public function defineMailRcpt($optionValue): self
		{
			$this->options[CURLOPT_MAIL_RCPT] = $optionValue;
			return $this;
		}
		
		public function defineRtspClientCSeq($optionValue): self
		{
			$this->options[CURLOPT_RTSP_CLIENT_CSEQ] = $optionValue;
			return $this;
		}
		
		public function defineRtspRequest($optionValue): self
		{
			$this->options[CURLOPT_RTSP_REQUEST] = $optionValue;
			return $this;
		}
		
		public function defineRtspServerCSeq($optionValue): self
		{
			$this->options[CURLOPT_RTSP_SERVER_CSEQ] = $optionValue;
			return $this;
		}
		
		public function defineRtspSessionId($optionValue): self
		{
			$this->options[CURLOPT_RTSP_SESSION_ID] = $optionValue;
			return $this;
		}
		
		public function defineRtspStreamUri($optionValue): self
		{
			$this->options[CURLOPT_RTSP_STREAM_URI] = $optionValue;
			return $this;
		}
		
		public function defineRtspTransport($optionValue): self
		{
			$this->options[CURLOPT_RTSP_TRANSPORT] = $optionValue;
			return $this;
		}
		
		public function defineFnmatchFunction(callable $optionValue): self
		{
			$this->options[CURLOPT_FNMATCH_FUNCTION] = $optionValue;
			return $this;
		}
		
		public function defineWildcardMatch($optionValue): self
		{
			$this->options[CURLOPT_WILDCARDMATCH] = $optionValue;
			return $this;
		}
		
		public function defineResolve($optionValue): self
		{
			$this->options[CURLOPT_RESOLVE] = $optionValue;
			return $this;
		}
		
		public function defineTlsauthPassword($optionValue): self
		{
			$this->options[CURLOPT_TLSAUTH_PASSWORD] = $optionValue;
			return $this;
		}
		
		public function defineTlsauthType($optionValue): self
		{
			$this->options[CURLOPT_TLSAUTH_TYPE] = $optionValue;
			return $this;
		}
		
		public function defineTlsauthUsername($optionValue): self
		{
			$this->options[CURLOPT_TLSAUTH_USERNAME] = $optionValue;
			return $this;
		}
		
		public function defineAcceptEncoding($optionValue): self
		{
			$this->options[CURLOPT_ACCEPT_ENCODING] = $optionValue;
			return $this;
		}
		
		public function defineTransferEncoding($optionValue): self
		{
			$this->options[CURLOPT_TRANSFER_ENCODING] = $optionValue;
			return $this;
		}
		
		public function defineGssapiDelegation($optionValue): self
		{
			$this->options[CURLOPT_GSSAPI_DELEGATION] = $optionValue;
			return $this;
		}
		
		public function defineAcceptTimeOutMs($optionValue): self
		{
			$this->options[CURLOPT_ACCEPTTIMEOUT_MS] = $optionValue;
			return $this;
		}
		
		public function defineDnsServers($optionValue): self
		{
			$this->options[CURLOPT_DNS_SERVERS] = $optionValue;
			return $this;
		}
		
		public function defineMailAuth($optionValue): self
		{
			$this->options[CURLOPT_MAIL_AUTH] = $optionValue;
			return $this;
		}
		
		public function defineSslOptions($optionValue): self
		{
			$this->options[CURLOPT_SSL_OPTIONS] = $optionValue;
			return $this;
		}
		
		public function defineTcpKeepAlive($optionValue): self
		{
			$this->options[CURLOPT_TCP_KEEPALIVE] = $optionValue;
			return $this;
		}
		
		public function defineTcpKeepIdle($optionValue): self
		{
			$this->options[CURLOPT_TCP_KEEPIDLE] = $optionValue;
			return $this;
		}
		
		public function defineTcpKeepIntvl($optionValue): self
		{
			$this->options[CURLOPT_TCP_KEEPINTVL] = $optionValue;
			return $this;
		}
		
		public function defineSaslIr($optionValue): self
		{
			$this->options[CURLOPT_SASL_IR] = $optionValue;
			return $this;
		}
		
		public function defineDnsInterface($optionValue): self
		{
			$this->options[CURLOPT_DNS_INTERFACE] = $optionValue;
			return $this;
		}
		
		public function defineDnsLocalIp4($optionValue): self
		{
			$this->options[CURLOPT_DNS_LOCAL_IP4] = $optionValue;
			return $this;
		}
		
		public function defineDnsLocalIp6($optionValue): self
		{
			$this->options[CURLOPT_DNS_LOCAL_IP6] = $optionValue;
			return $this;
		}
		
		public function defineXoAuth2Bearer($optionValue): self
		{
			$this->options[CURLOPT_XOAUTH2_BEARER] = $optionValue;
			return $this;
		}
		
		public function defineLoginOptions($optionValue): self
		{
			$this->options[CURLOPT_LOGIN_OPTIONS] = $optionValue;
			return $this;
		}
		
		public function defineExpect100TimeoutMs($optionValue): self
		{
			$this->options[CURLOPT_EXPECT_100_TIMEOUT_MS] = $optionValue;
			return $this;
		}
		
		public function defineSslEnableAlpn($optionValue): self
		{
			$this->options[CURLOPT_SSL_ENABLE_ALPN] = $optionValue;
			return $this;
		}
		
		public function defineSslEnableNpn($optionValue): self
		{
			$this->options[CURLOPT_SSL_ENABLE_NPN] = $optionValue;
			return $this;
		}
		
		public function defineHeaderOpt($optionValue): self
		{
			$this->options[CURLOPT_HEADEROPT] = $optionValue;
			return $this;
		}
		
		public function defineProxyHeader($optionValue): self
		{
			$this->options[CURLOPT_PROXYHEADER] = $optionValue;
			return $this;
		}
		
		public function definePinnedPublickey($optionValue): self
		{
			$this->options[CURLOPT_PINNEDPUBLICKEY] = $optionValue;
			return $this;
		}
		
		public function defineUnixSocketPath($optionValue): self
		{
			$this->options[CURLOPT_UNIX_SOCKET_PATH] = $optionValue;
			return $this;
		}
		
		public function defineSslVerifystatus($optionValue): self
		{
			$this->options[CURLOPT_SSL_VERIFYSTATUS] = $optionValue;
			return $this;
		}
		
		public function definePathAsIs($optionValue): self
		{
			$this->options[CURLOPT_PATH_AS_IS] = $optionValue;
			return $this;
		}
		
		public function defineSslFalSeStart($optionValue): self
		{
			$this->options[CURLOPT_SSL_FALSESTART] = $optionValue;
			return $this;
		}
		
		public function definePipeWait($optionValue): self
		{
			$this->options[CURLOPT_PIPEWAIT] = $optionValue;
			return $this;
		}
		
		public function defineProxyServiceName($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SERVICE_NAME] = $optionValue;
			return $this;
		}
		
		public function defineServiceName($optionValue): self
		{
			$this->options[CURLOPT_SERVICE_NAME] = $optionValue;
			return $this;
		}
		
		public function defineDefaultProtocol($optionValue): self
		{
			$this->options[CURLOPT_DEFAULT_PROTOCOL] = $optionValue;
			return $this;
		}
		
		public function defineStreamWeight($optionValue): self
		{
			$this->options[CURLOPT_STREAM_WEIGHT] = $optionValue;
			return $this;
		}
		
		public function defineTftpNoOptions($optionValue): self
		{
			$this->options[CURLOPT_TFTP_NO_OPTIONS] = $optionValue;
			return $this;
		}
		
		public function defineConnectTo($optionValue): self
		{
			$this->options[CURLOPT_CONNECT_TO] = $optionValue;
			return $this;
		}
		
		public function defineTcpFastOpen($optionValue): self
		{
			$this->options[CURLOPT_TCP_FASTOPEN] = $optionValue;
			return $this;
		}
		
		public function defineKeepSendingOnError($optionValue): self
		{
			$this->options[CURLOPT_KEEP_SENDING_ON_ERROR] = $optionValue;
			return $this;
		}
		
		public function definePreProxy($optionValue): self
		{
			$this->options[CURLOPT_PRE_PROXY] = $optionValue;
			return $this;
		}
		
		public function defineProxyCaInfo($optionValue): self
		{
			$this->options[CURLOPT_PROXY_CAINFO] = $optionValue;
			return $this;
		}
		
		public function defineProxyCapath($optionValue): self
		{
			$this->options[CURLOPT_PROXY_CAPATH] = $optionValue;
			return $this;
		}
		
		public function defineProxyCrlFile($optionValue): self
		{
			$this->options[CURLOPT_PROXY_CRLFILE] = $optionValue;
			return $this;
		}
		
		public function defineProxyKeyPasswd($optionValue): self
		{
			$this->options[CURLOPT_PROXY_KEYPASSWD] = $optionValue;
			return $this;
		}
		
		public function defineProxyPinnedPublicKey($optionValue): self
		{
			$this->options[CURLOPT_PROXY_PINNEDPUBLICKEY] = $optionValue;
			return $this;
		}
		
		public function defineProxySslCipherList($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSL_CIPHER_LIST] = $optionValue;
			return $this;
		}
		
		public function defineProxySslOptions($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSL_OPTIONS] = $optionValue;
			return $this;
		}
		
		public function defineProxySslVerifyHost($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSL_VERIFYHOST] = $optionValue;
			return $this;
		}
		
		public function defineProxySslVerifyPeer($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSL_VERIFYPEER] = $optionValue;
			return $this;
		}
		
		public function defineProxySslCert($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSLCERT] = $optionValue;
			return $this;
		}
		
		public function defineProxySslcertType($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSLCERTTYPE] = $optionValue;
			return $this;
		}
		
		public function defineProxySslKey($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSLKEY] = $optionValue;
			return $this;
		}
		
		public function defineProxySslKeyType($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSLKEYTYPE] = $optionValue;
			return $this;
		}
		
		public function defineProxySslVersion($optionValue): self
		{
			$this->options[CURLOPT_PROXY_SSLVERSION] = $optionValue;
			return $this;
		}
		
		public function defineProxyTlsAuthPassword($optionValue): self
		{
			$this->options[CURLOPT_PROXY_TLSAUTH_PASSWORD] = $optionValue;
			return $this;
		}
		
		public function defineProxyTlsAuthType($optionValue): self
		{
			$this->options[CURLOPT_PROXY_TLSAUTH_TYPE] = $optionValue;
			return $this;
		}
		
		public function defineProxyTlsAuthUsername($optionValue): self
		{
			$this->options[CURLOPT_PROXY_TLSAUTH_USERNAME] = $optionValue;
			return $this;
		}
		
		public function defineAbstractUnixSocket($optionValue): self
		{
			$this->options[CURLOPT_ABSTRACT_UNIX_SOCKET] = $optionValue;
			return $this;
		}
		
		public function defineSuppressConnectHeaders($optionValue): self
		{
			$this->options[CURLOPT_SUPPRESS_CONNECT_HEADERS] = $optionValue;
			return $this;
		}
		
		public function defineRequestTarget($optionValue): self
		{
			$this->options[CURLOPT_REQUEST_TARGET] = $optionValue;
			return $this;
		}
		
		public function defineSocks5Auth($optionValue): self
		{
			$this->options[CURLOPT_SOCKS5_AUTH] = $optionValue;
			return $this;
		}
		
		public function defineSshCompression($optionValue): self
		{
			$this->options[CURLOPT_SSH_COMPRESSION] = $optionValue;
			return $this;
		}
		
		public function defineHappyEyeballsTimeoutMs($optionValue): self
		{
			$this->options[CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS] = $optionValue;
			return $this;
		}
		
		public function defineTimevalueLarge($optionValue): self
		{
			$this->options[CURLOPT_TIMEVALUE_LARGE] = $optionValue;
			return $this;
		}
		
		public function defineDnsShuffleAddresses($optionValue): self
		{
			$this->options[CURLOPT_DNS_SHUFFLE_ADDRESSES] = $optionValue;
			return $this;
		}
		
		public function defineHAproxyProtocol($optionValue): self
		{
			$this->options[CURLOPT_HAPROXYPROTOCOL] = $optionValue;
			return $this;
		}
		
		public function defineDisallowUsernameInUrl($optionValue): self
		{
			$this->options[CURLOPT_DISALLOW_USERNAME_IN_URL] = $optionValue;
			return $this;
		}
		
		public function defineProxyTls13Ciphers($optionValue): self
		{
			$this->options[CURLOPT_PROXY_TLS13_CIPHERS] = $optionValue;
			return $this;
		}
		
		public function defineTls13Ciphers($optionValue): self
		{
			$this->options[CURLOPT_TLS13_CIPHERS] = $optionValue;
			return $this;
		}
		
		public function defineHttp09Allowed($optionValue): self
		{
			$this->options[CURLOPT_HTTP09_ALLOWED] = $optionValue;
			return $this;
		}
		
	}
