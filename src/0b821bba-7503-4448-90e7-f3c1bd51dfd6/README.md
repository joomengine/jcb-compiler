```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Config (Details)
> namespace: **VDM\Joomla\Componentbuilder\JoomlaPower**
> extends: **BaseConfig**
```uml
@startuml
class Config  #Gold {
  # JoomlaRegistry $config
  + __construct(?Input $input = null, ?JoomlaRegistry $params = null, ...)
  # getGiteatoken() : ?string
  # getAddcustomgiteaurl() : int
  # getCustomgiteaurl() : ?string
  # getCustomgiteatoken() : ?string
  # getSuperpowerscoreorganisation() : string
  # getSuperpowersinitrepos() : array
  # getTmppath() : string
  # getAddsuperpowers() : bool
  # getAddownpowers() : bool
  # getLocalpowersrepositorypath() : string
  # getApprovedpaths() : array
}

note right of Config::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Input $input = null
    ?JoomlaRegistry $params = null
    ?JoomlaRegistry $config = null
end note

note left of Config::getGiteatoken
  get Gitea Access Token

  since: 3.2.0
  return: ?string
end note

note right of Config::getAddcustomgiteaurl
  get Add Custom Gitea URL

  since: 3.2.0
  return: int
end note

note left of Config::getCustomgiteaurl
  get Custom Gitea URL

  since: 3.2.0
  return: ?string
end note

note right of Config::getCustomgiteatoken
  get Custom Gitea Access Token

  since: 3.2.0
  return: ?string
end note

note left of Config::getSuperpowerscoreorganisation
  Get super power core organisation

  since: 3.2.0
  return: string
end note

note right of Config::getSuperpowersinitrepos
  Get super power init repos

  since: 3.2.0
  return: array
end note

note left of Config::getTmppath
  get temporary path

  since: 3.2.0
  return: string
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

