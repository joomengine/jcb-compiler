```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InstallInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Extension**
> extends: ****
```uml
@startuml
interface InstallInterface  #Lavender {
  + getOfficialName() : string
  + getClassName() : string
  + getInstallerClassName() : string
}

note right of InstallInterface::getOfficialName
  The extension official name

  since: 3.2.0
  return: string
end note

note right of InstallInterface::getClassName
  The extension class name

  since: 3.2.0
  return: string
end note

note right of InstallInterface::getInstallerClassName
  The extension installer class name

  since: 3.2.0
  return: string
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

