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
  # getJoomlapowerscoreorganisation() : string
  # getJoomlapowersinitrepos() : array
  # getTmppath() : string
  # getLocaljoomlapowersrepositorypath() : string
  # getApprovedjoomlapaths() : array
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

note left of Config::getJoomlapowerscoreorganisation
  Get super power core organisation

  since: 3.2.0
  return: string
end note

note right of Config::getJoomlapowersinitrepos
  Get Joomla power init repos

  since: 3.2.0
  return: array
end note

note left of Config::getTmppath
  get temporary path

  since: 3.2.0
  return: string
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

