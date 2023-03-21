```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Paths (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
class Paths  #Gold {
  # Config $config
  # Component $component
  + __construct(?Config $config = null, ?Component $component = null)
  + __get(string $key) : string
  # key(string $key) : string
  - setTemplatePath() : void
  - setComponentSalesName() : void
  - setComponentBackupName() : void
  - setComponentFolderName() : void
  - setComponentPath() : void
  - setTemplatePathCustom() : void
}

note right of Paths::__construct
  Constructor

  since: 3.2.0
end note

note left of Paths::__get
  getting any valid paths

  since: 3.2.0
  return: string
end note

note right of Paths::key
  Model the key

  since: 3.2.0
  return: string
end note

note left of Paths::setTemplatePath
  Set the template path

  since: 3.2.0
  return: void
end note

note right of Paths::setComponentSalesName
  Set component sales name

  since: 3.2.0
  return: void
end note

note left of Paths::setComponentBackupName
  Set component backup name

  since: 3.2.0
  return: void
end note

note right of Paths::setComponentFolderName
  Set component folder name

  since: 3.2.0
  return: void
end note

note left of Paths::setComponentPath
  Set component path

  since: 3.2.0
  return: void
end note

note right of Paths::setTemplatePathCustom
  set the template path for custom TODO: just use custom_folder_path in config

  since: 3.2.0
  return: void
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

