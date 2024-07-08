```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customcode (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Customcode  #Gold {
  + register(Container $container) : void
  + getCustomcode(Container $container) : CustomcodeInterface
  + getExternal(Container $container) : External
  + getGui(Container $container) : Gui
  + getHash(Container $container) : Hash
  + getLockBase(Container $container) : LockBase
  + getDispenser(Container $container) : Dispenser
  + getPaths(Container $container) : Paths
  + getExtractor(Container $container) : Extractor
}

note right of Customcode::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Customcode::getCustomcode
  Get the Compiler Customcode

  since: 3.2.0
  return: CustomcodeInterface
end note

note right of Customcode::getExternal
  Get the Compiler Customcode External

  since: 3.2.0
  return: External
end note

note left of Customcode::getGui
  Get the Compiler Customcode Gui

  since: 3.2.0
  return: Gui
end note

note right of Customcode::getHash
  Get the Customcode Hash

  since: 3.2.0
  return: Hash
end note

note left of Customcode::getLockBase
  Get the Customcode LockBase64

  since: 3.2.0
  return: LockBase
end note

note right of Customcode::getDispenser
  Get the Customcode Dispenser

  since: 3.2.0
  return: Dispenser
end note

note left of Customcode::getPaths
  Get the Customcode Extractor Paths

  since: 3.2.0
  return: Paths
end note

note right of Customcode::getExtractor
  Get the Customcode Extractor

  since: 3.2.0
  return: Extractor
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

