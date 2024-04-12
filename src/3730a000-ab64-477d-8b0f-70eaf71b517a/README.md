```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
class JoomlaPower << (F,LightGreen) >> #RoyalBlue {
  + array $active
  + array $namespace
  + array $composer
  + array $superpowers
  # string $fixUrl
  # array $state
  # array $retry
  # Config $config
  # Placeholder $placeholder
  # Customcode $customcode
  # Gui $gui
  # Superpower $superpower
  # $db
  # $app
  + __construct(Config $config, Placeholder $placeholder, ...)
  + load(array $guids) : void
  + get(string $guid, int $build) : ?object
  - set(string $guid) : bool
  - isPowerSet(string $guid) : bool
  - isGuidValid(string $guid) : bool
  - getPowerData(string $guid) : ?object
  - setNamespace(string $guid) : bool
  - setUseSelection(string $guid, array $use, ...) : void
  - setLoadSelection(string $guid) : void
  - setComposer(string $guid) : void
  - setImplements(string $guid, array $use) : void
  - setExtend(string $guid, array $use) : void
  - setUseAs(string $guid, array $use, ...) : void
  - getCleanNamespace(string $namespace) : string
  - getUseNamespace(string $namespace, string $as = 'default') : string
  - addToHeader(string $guid, string $string) : void
  - setLicensingTemplate(string $guid, array $guiMapper) : void
  - setHeader(string $guid, array $guiMapper) : void
  - setMainClassCode(string $guid, array $guiMapper) : void
  - setSuperPowers(string $guid) : void
}

note right of JoomlaPower::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Customcode $customcode
    Gui $gui
    Superpower $superpower
end note

note left of JoomlaPower::load
  load all the powers linked to this component

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note left of JoomlaPower::set
  Set a power

  since: 3.2.0
  return: bool
end note

note right of JoomlaPower::isPowerSet
  Check if the power is already set

  since: 3.2.0
  return: bool
end note

note left of JoomlaPower::isGuidValid
  Validate the GUID

  since: 3.2.0
  return: bool
end note

note right of JoomlaPower::getPowerData
  Get the power data from the database

  since: 3.2.0
  return: ?object
end note

note left of JoomlaPower::setNamespace
  Set the namespace for this power

  since: 3.2.0
  return: bool
end note

note right of JoomlaPower::setUseSelection
  Set Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note left of JoomlaPower::setLoadSelection
  Load Extra Classes

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::setComposer
  Set Composer Linked Use and Access Point

  since: 3.2.0
  return: void
end note

note left of JoomlaPower::setImplements
  Set Implements Interface classes

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::setExtend
  Set Extend Class

  since: 3.2.0
  return: void
end note

note left of JoomlaPower::setUseAs
  Set Extra Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note right of JoomlaPower::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 3.2.0
  return: string
end note

note left of JoomlaPower::getUseNamespace
  Get [use Namespace\Class;]

  since: 3.2.0
  return: string
end note

note right of JoomlaPower::addToHeader
  Add to class header

  since: 3.2.0
  return: void
end note

note left of JoomlaPower::setLicensingTemplate
  Set the power licensing template

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::setHeader
  Set the power header script

  since: 3.2.0
  return: void
end note

note left of JoomlaPower::setMainClassCode
  Set the power main class code

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::setSuperPowers
  Set the super powers of this power

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

