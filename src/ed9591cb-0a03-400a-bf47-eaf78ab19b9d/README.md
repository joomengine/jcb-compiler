```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Extension (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Extension  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getJ3ExtensionInstallScript(Container $container) : J3InstallScript
  + getJ4ExtensionInstallScript(Container $container) : J4InstallScript
  + getJ5ExtensionInstallScript(Container $container) : J5InstallScript
  + getExtensionInstallScript(Container $container) : GetScriptInterface
}

note right of Extension::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Extension::getJ3ExtensionInstallScript
  Get the Joomla 3 Extension Install Script

  since: 3.2.0
  return: J3InstallScript
end note

note right of Extension::getJ4ExtensionInstallScript
  Get the Joomla 4 Extension Install Script

  since: 3.2.0
  return: J4InstallScript
end note

note right of Extension::getJ5ExtensionInstallScript
  Get the Joomla 5 Extension Install Script

  since: 3.2.0
  return: J5InstallScript
end note

note right of Extension::getExtensionInstallScript
  Get the Joomla Extension Install Script

  since: 3.2.0
  return: GetScriptInterface
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

