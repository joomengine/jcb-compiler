```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
class Power  #Gold {
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
  # \JDatabaseDriver $db
  # CMSApplication $app
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
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
  - getCleanNamespace(string $namespace, bool $removeNumbers = true) : string
  - getUseNamespace(string $namespace, string $as = 'default') : string
  - addToHeader(string $guid, string $string) : void
  - setLicensingTemplate(string $guid, array $guiMapper) : void
  - setHeader(string $guid, array $guiMapper) : void
  - setMainClassCode(string $guid, array $guiMapper) : void
  - setSuperPowers(string $guid) : void
}

note right of Power::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Superpower $superpower = null
    ?\JDatabaseDriver $db = null
    ?CMSApplication $app = null
end note

note left of Power::load
  load all the powers linked to this component

  since: 3.2.0
  return: void
end note

note right of Power::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note left of Power::set
  Set a power

  since: 3.2.0
  return: bool
end note

note right of Power::isPowerSet
  Check if the power is already set

  since: 3.2.0
  return: bool
end note

note left of Power::isGuidValid
  Validate the GUID

  since: 3.2.0
  return: bool
end note

note right of Power::getPowerData
  Get the power data from the database

  since: 3.2.0
  return: ?object
end note

note left of Power::setNamespace
  Set the namespace for this power

  since: 3.2.0
  return: bool
end note

note right of Power::setUseSelection
  Set Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note left of Power::setLoadSelection
  Load Extra Classes

  since: 3.2.0
  return: void
end note

note right of Power::setComposer
  Set Composer Linked Use and Access Point

  since: 3.2.0
  return: void
end note

note left of Power::setImplements
  Set Implements Interface classes

  since: 3.2.0
  return: void
end note

note right of Power::setExtend
  Set Extend Class

  since: 3.2.0
  return: void
end note

note left of Power::setUseAs
  Set Extra Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note right of Power::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 3.2.0
  return: string
end note

note left of Power::getUseNamespace
  Get [use Namespace\Class;]

  since: 3.2.0
  return: string
end note

note right of Power::addToHeader
  Add to class header

  since: 3.2.0
  return: void
end note

note left of Power::setLicensingTemplate
  Set the power licensing template

  since: 3.2.0
  return: void
end note

note right of Power::setHeader
  Set the power header script

  since: 3.2.0
  return: void
end note

note left of Power::setMainClassCode
  Set the power main class code

  since: 3.2.0
  return: void
end note

note right of Power::setSuperPowers
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

