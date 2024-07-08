```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Header (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Header  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getHeader(Container $container) : HeaderInterface
  + getJ3Header(Container $container) : J3Header
  + getJ4Header(Container $container) : J4Header
  + getJ5Header(Container $container) : J5Header
}

note right of Header::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Header::getHeader
  Get the Header

  since: 3.2.0
  return: HeaderInterface
end note

note right of Header::getJ3Header
  Get The Header Class.

  since: 3.2.0
  return: J3Header
end note

note right of Header::getJ4Header
  Get The Header Class.

  since: 3.2.0
  return: J4Header
end note

note right of Header::getJ5Header
  Get The Header Class.

  since: 3.2.0
  return: J5Header
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

