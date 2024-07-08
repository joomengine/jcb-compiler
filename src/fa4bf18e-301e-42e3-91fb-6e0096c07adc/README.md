```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Config (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
> extends: **BaseConfig**
```uml
@startuml
class Config  #Gold {
  # JoomlaRegistry $config
  + __construct(?Input $input = null, ?JoomlaRegistry $params = null, ...)
  # getGiteausername() : ?string
  # getGiteatoken() : ?string
  # getSuperpowerscoreorganisation() : string
  # getSuperpowerscorerepos() : array
  # getAddcontributors() : bool
  # getAddajax() : bool
  # getAddsiteajax() : bool
  # getAddeximport() : bool
  # getAddcheckin() : bool
  # getComponentid() : int
  # getComponentversion() : string
  # getComponentcodename() : string
  # getComponentcontext() : string
  # getComponentcodenamelength() : int
  # getComponentautoloaderpath() : string
  # getAddnamespaceprefix() : bool
  # getNamespaceprefix() : string
  # getJoomlaversion() : int
  # getJoomlaversions() : array
  # getJoomlaversionname() : string
  # getSetjoomlafields() : bool
  # getShowadvancedoptions() : bool
  # getIndentationvalue() : string
  # getAddbuilddate() : int
  # getBuilddate() : string
  # getBackup() : int
  # getRepository() : int
  # getDebuglinenr() : int
  # getMinify() : int
  # getRemovelinebreaks() : bool
  # getTidy() : bool
  # getSettidywarning() : bool
  # getSettaghistory() : bool
  # getPercentagelanguageadd() : int
  # getLangtag() : string
  # getLangprefix() : string
  # getLangtarget() : string
  # getLangstringtargets() : array
  # getLangstringkeytargets() : array
  # getFieldbuildertype() : int
  # getDefaultfields() : array
  # getTmppath() : string
  # getCompilerpath() : string
  # getJcbpowerspath() : string
  # getPowerlibraryfolder() : string
  # getLocalpowersrepositorypath() : string
  # getApprovedpaths() : array
  # getJoomlapowerscoreorganisation() : string
  # getJoomlapowersinitrepos() : array
  # getLocaljoomlapowersrepositorypath() : string
  # getApprovedjoomlapaths() : array
  # getBompath() : string
  # getCustomfolderpath() : string
  # getAddassetstablefix() : int
  # getAddassetstablenamefix() : bool
  # getAccessworsecase() : int
  # getMysqltablekeys() : array
  # getAddplaceholders() : bool
  # getAddpower() : bool
  # getAddsuperpowers() : bool
  # getAddownpowers() : bool
  # getBuildtarget() : string
  # getCryptiontypes() : array
  # getBasicencryption() : bool
  # getMediumencryption() : bool
  # getWhmcsencryption() : bool
  # getRemovesitefolder() : bool
  # getRemovesiteeditfolder() : bool
  # getUikit() : int
  # getGooglechart() : bool
  # getFootable() : bool
  # getFootableversion() : int
  # getPermissionstrictperfield() : bool
  # getExporttextonly() : int
}

note right of Config::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Input $input = null
    ?JoomlaRegistry $params = null
    ?JoomlaRegistry $config = null
end note

note left of Config::getGiteausername
  get Gitea Username

  since: 3.2.0
  return: ?string
end note

note right of Config::getGiteatoken
  get Gitea Access Token

  since: 3.2.0
  return: ?string
end note

note left of Config::getSuperpowerscoreorganisation
  Get super power core organisation

  since: 3.2.0
  return: string
end note

note right of Config::getSuperpowerscorerepos
  Get super power core repos

  since: 3.2.0
  return: array
end note

note left of Config::getAddcontributors
  get add contributors switch

  since: 3.2.0
  return: bool
end note

note right of Config::getAddajax
  get Add Ajax Switch

  since: 3.2.0
  return: bool
end note

note left of Config::getAddsiteajax
  get Add Site Ajax Switch

  since: 3.2.0
  return: bool
end note

note right of Config::getAddeximport
  get add eximport

  since: 3.2.0
  return: bool
end note

note left of Config::getAddcheckin
  get add checkin

  since: 3.2.0
  return: bool
end note

note right of Config::getComponentid
  get posted component id

  since: 3.2.0
  return: int
end note

note left of Config::getComponentversion
  get component version

  since: 3.2.0
  return: string
end note

note right of Config::getComponentcodename
  get components code name

  since: 3.2.0
  return: string
end note

note left of Config::getComponentcontext
  get component context

  since: 3.2.0
  return: string
end note

note right of Config::getComponentcodenamelength
  get component code name length

  since: 3.2.0
  return: int
end note

note left of Config::getComponentautoloaderpath
  get component autoloader path

  since: 3.2.0
  return: string
end note

note right of Config::getAddnamespaceprefix
  get add namespace prefix

  since: 3.2.0
  return: bool
end note

note left of Config::getNamespaceprefix
  get namespace prefix

  since: 3.2.0
  return: string
end note

note right of Config::getJoomlaversion
  get posted Joomla version

  since: 3.2.0
  return: int
end note

note left of Config::getJoomlaversions
  get Joomla versions

  since: 3.2.0
  return: array
end note

note right of Config::getJoomlaversionname
  get posted Joomla version name

  since: 3.2.0
  return: string
end note

note left of Config::getSetjoomlafields
  set joomla fields

  since: 3.2.0
  return: bool
end note

note right of Config::getShowadvancedoptions
  get show advanced options switch

  since: 3.2.0
  return: bool
end note

note left of Config::getIndentationvalue
  get indentation value

  since: 3.2.0
  return: string
end note

note right of Config::getAddbuilddate
  get add build date switch

  since: 3.2.0
  return: int
end note

note left of Config::getBuilddate
  get build date

  since: 3.2.0
  return: string
end note

note right of Config::getBackup
  get posted backup switch

  since: 3.2.0
  return: int
end note

note left of Config::getRepository
  get posted repository switch

  since: 3.2.0
  return: int
end note

note right of Config::getDebuglinenr
  get posted debuglinenr switch

  since: 3.2.0
  return: int
end note

note left of Config::getMinify
  get posted minify switch

  since: 3.2.0
  return: int
end note

note right of Config::getRemovelinebreaks
  get posted remove line breaks switch

  since: 3.2.0
  return: bool
end note

note left of Config::getTidy
  get system tidy state

  since: 3.2.0
  return: bool
end note

note right of Config::getSettidywarning
  add tidy warning

  since: 3.2.0
  return: bool
end note

note left of Config::getSettaghistory
  get history tag switch

  since: 3.2.0
  return: bool
end note

note right of Config::getPercentagelanguageadd
  get percentage when a language should be added

  since: 3.2.0
  return: int
end note

note left of Config::getLangtag
  get language tag

  since: 3.2.0
  return: string
end note

note right of Config::getLangprefix
  get language prefix

  since: 3.2.0
  return: string
end note

note left of Config::getLangtarget
  get language target

  since: 3.2.0
  return: string
end note

note right of Config::getLangstringtargets
  get language string targets

  since: 3.2.0
  return: array
end note

note left of Config::getLangstringkeytargets
  get language string targets (by key name)

  since: 3.2.0
  return: array
end note

note right of Config::getFieldbuildertype
  get field builder type

  since: 3.2.0
  return: int
end note

note left of Config::getDefaultfields
  get default fields

  since: 3.2.0
  return: array
end note

note right of Config::getTmppath
  get temporary path

  since: 3.2.0
  return: string
end note

note left of Config::getCompilerpath
  get compiler path

  since: 3.2.0
  return: string
end note

note right of Config::getJcbpowerspath
  get jcb powers path

  since: 3.2.0
  return: string
end note

note left of Config::getPowerlibraryfolder
  get jcb powers path

  since: 3.2.0
  return: string
end note

note right of Config::getLocalpowersrepositorypath
  Get local super powers repository path

  since: 3.2.0
  return: string
end note

note left of Config::getApprovedpaths
  Get super power approved paths

  since: 3.2.0
  return: array
end note

note right of Config::getJoomlapowerscoreorganisation
  Get super power core organisation

  since: 3.2.0
  return: string
end note

note left of Config::getJoomlapowersinitrepos
  Get Joomla power init repos

  since: 3.2.0
  return: array
end note

note right of Config::getLocaljoomlapowersrepositorypath
  Get local joomla super powers repository path

  since: 3.2.0
  return: string
end note

note left of Config::getApprovedjoomlapaths
  Get joomla power approved paths

  since: 3.2.0
  return: array
end note

note right of Config::getBompath
  get bom path

  since: 3.2.0
  return: string
end note

note left of Config::getCustomfolderpath
  get custom folder path

  since: 3.2.0
  return: string
end note

note right of Config::getAddassetstablefix
  get switch to add assets table fix

  since: 3.2.0
  return: int
end note

note left of Config::getAddassetstablenamefix
  get switch to add assets table name fix

  since: 3.2.0
  return: bool
end note

note right of Config::getAccessworsecase
  get access worse case size

  since: 3.2.0
  return: int
end note

note left of Config::getMysqltablekeys
  get mysql table keys

  since: 3.2.0
  return: array
end note

note right of Config::getAddplaceholders
  get switch add placeholders

  since: 3.2.0
  return: bool
end note

note left of Config::getAddpower
  get switch add power

  since: 3.2.0
  return: bool
end note

note right of Config::getAddsuperpowers
  Get switch to add super powers

  since: 3.2.0
  return: bool
end note

note left of Config::getAddownpowers
  Get switch to add own super powers

  since: 3.2.0
  return: bool
end note

note right of Config::getBuildtarget
  get switch build target switch

  since: 3.2.0
  return: string
end note

note left of Config::getCryptiontypes
  get encryption types

  since: 3.2.0
  return: array
end note

note right of Config::getBasicencryption
  get basic encryption switch

  since: 3.2.0
  return: bool
end note

note left of Config::getMediumencryption
  get medium encryption switch

  since: 3.2.0
  return: bool
end note

note right of Config::getWhmcsencryption
  get whmcs encryption switch

  since: 3.2.0
  return: bool
end note

note left of Config::getRemovesitefolder
  Should we remove the site folder

  since: 3.2.0
  return: bool
end note

note right of Config::getRemovesiteeditfolder
  Should we remove the site edit folder

  since: 3.2.0
  return: bool
end note

note left of Config::getUikit
  The Uikit switch

  since: 3.2.0
  return: int
end note

note right of Config::getGooglechart
  The google chart switch

  since: 3.2.0
  return: bool
end note

note left of Config::getFootable
  The footable switch

  since: 3.2.0
  return: bool
end note

note right of Config::getFootableversion
  The footable version

  since: 3.2.0
  return: int
end note

note left of Config::getPermissionstrictperfield
  The Permission Strict Per Field Switch

  since: 3.2.0
  return: bool
end note

note right of Config::getExporttextonly
  The Export Text Only Switch

  since: 3.2.0
  return: int
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

