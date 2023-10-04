```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Fieldset (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**
```uml
@startuml
class Fieldset  #Gold {
  # Language $language
  # MetaData $metadata
  # AccessSwitch $accessswitch
  # AccessSwitchList $accessswitchlist
  + __construct(Language $language, MetaData $metadata, ...)
  + set(bool $access, bool $metadata, ...) : void
}

note right of Fieldset::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Language $language
    MetaData $metadata
    AccessSwitch $accessswitch
    AccessSwitchList $accessswitchlist
end note

note right of Fieldset::set
  Set the fieldset language

  since: 3.2.0
  return: void
  
  arguments:
    bool $access
    bool $metadata
    string $langTarget
    string $langView
    string $langViews
    string $nameSingle
    string $nameList
    string $nameSingleCode
    string $nameListCode
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

