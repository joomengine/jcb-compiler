```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SettingsInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Component**
> extends: ****
```uml
@startuml
interface SettingsInterface  #Lavender {
  + exists() : bool
  + structure() : object
  + multiple() : object
  + single() : object
  + standardFolder(string $folder) : bool
  + standardRootFile(string $file) : bool
}

note right of SettingsInterface::exists
  Check if data set is loaded

  since: 3.2.0
  return: bool
end note

note right of SettingsInterface::structure
  Get Joomla - Folder Structure to Create

  since: 3.2.0
  return: object
end note

note right of SettingsInterface::multiple
  Get Joomla - Move Multiple Structure

  since: 3.2.0
  return: object
end note

note right of SettingsInterface::single
  Get Joomla - Move Single Structure

  since: 3.2.0
  return: object
end note

note right of SettingsInterface::standardFolder
  Check if Folder is a Standard Folder

  since: 3.2.0
  return: bool
end note

note right of SettingsInterface::standardRootFile
  Check if File is a Standard Root File

  since: 3.2.0
  return: bool
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

