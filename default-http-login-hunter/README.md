# Default HTTP Login Hunter

The **default-http-login-hunter.sh** is a tool capable of checking more then 380 different web interfaces for default credentials. It is based on the [NNdefaccts](https://github.com/nnposter/nndefaccts) alternate fingerprint dataset maintained by nnposter.

Examples of supported web interfaces:

- Network devices (3Com, Asus, Cisco, D-Link, F5, Nortel..)
- Video cameras (AXIS, GeoVision, Hikvision, Sanyo..)
- Application servers (Apache Tomcat, JBoss EAP..)
- Monitoring software (Cacti, Nagios, OpenNMS..)
- Server management (Dell iDRAC, HP iLO..)
- Web servers (WebLogic, WebSphere..)
- Printers (Kyocera, Sharp, Xerox..)
- IP Phones (Cisco, Polycom..)
- Citrix, NAS4Free, ManageEngine, VMware..

For a full list see the [list.txt](https://github.com/ahmadchen/files-projector/default-http-login-hunter/blob/master/list.txt)

## Usage and examples

```
# Usage:
default-http-login-hunter.sh [-vvv] <URL|urls.txt|update>

# Example with a single URL:
default-http-login-hunter.sh 10.10.0.1
default-http-login-hunter.sh 10.10.0.1:80
default-http-login-hunter.sh https://10.10.0.1:443/
default-http-login-hunter.sh http://10.10.0.1:9999/

# Example with a list of URLs:
default-http-login-hunter.sh urls.txt

# To get the latest fingerprints:
default-http-login-hunter.sh update
```

For more information, visit -web-http/

## Thanks
Big thanks to nnposter for his awesome NNdefacts dataset without which this would not be possible and also for his contributions to the Nmap project. Thank you nnposter!
