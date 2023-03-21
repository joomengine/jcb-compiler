```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class InstallScript (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Extension\JoomlaThree**
```uml
@startuml
class InstallScript  #Gold {
  # object $extension
  # array $methods
  # array $types
  # array $construct
  # array $install
  # array $update
  # array $uninstall
  # bool $preflightActive
  # bool $postflightActive
  + get(object $extension) : string
  # build() : string
  # head() : string
  # construct() : string
  # main(string $name) : string
  # flight(string $name) : string
}

note right of InstallScript::get
  get install script

  since: 3.2.0
  return: string
end note

note right of InstallScript::build
  build the install class

  since: 3.2.0
  return: string
end note

note right of InstallScript::head
  get install script head

  since: 3.2.0
  return: string
end note

note right of InstallScript::construct
  get constructor

  since: 3.2.0
  return: string
end note

note right of InstallScript::main
  build main methods

  since: 3.2.0
  return: string
end note

note right of InstallScript::flight
  build flight methods

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

