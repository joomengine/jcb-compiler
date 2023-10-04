```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Dynamicget (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Dynamicget  #Gold {
  # array $jointer
  # array $operator
  # array $guiMapper
  # Config $config
  # SiteDynamicGet $sitedynamicget
  # SiteMainGet $sitemainget
  # Customcode $customcode
  # Gui $gui
  # Placeholder $placeholder
  # Selection $selection
  + __construct(Config $config, SiteDynamicGet $sitedynamicget, ...)
  + set(object $item, string $view_code, ...) : void
}

note right of Dynamicget::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    SiteDynamicGet $sitedynamicget
    SiteMainGet $sitemainget
    Customcode $customcode
    Gui $gui
    Placeholder $placeholder
    Selection $selection
end note

note right of Dynamicget::set
  Set Dynamic Get

  since: 3.2.0
  return: void
  
  arguments:
    object $item
    string $view_code
    string $context
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

