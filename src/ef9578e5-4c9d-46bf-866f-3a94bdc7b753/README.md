```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**
```uml
@startuml
class Data << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # EventInterface $event
  # Placeholder $placeholder
  # ComponentPlaceholder $componentPlaceholder
  # Dispenser $dispenser
  # Customcode $customcode
  # Gui $gui
  # Field $field
  # FieldName $fieldName
  # UniqueName $uniqueName
  # Filesfolders $filesFolders
  # Historycomponent $history
  # Whmcs $whmcs
  # Sqltweaking $sqltweaking
  # Adminviews $adminviews
  # Siteviews $siteviews
  # Customadminviews $customadminviews
  # Updateserver $updateserver
  # Joomlamodules $modules
  # Joomlaplugins $plugins
  # Router $router
  # $db
  + __construct(?Config $config = null, ?EventInterface $event = null, ...)
  + get() : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?EventInterface $event = null
    ?Placeholder $placeholder = null
    ?ComponentPlaceholder $componentPlaceholder = null
    ?Dispenser $dispenser = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Field $field = null
    ?FieldName $fieldName = null
    ?UniqueName $uniqueName = null
    ?Filesfolders $filesFolders = null
    ?Historycomponent $history = null
    ?Whmcs $whmcs = null
    ?Sqltweaking $sqltweaking = null
    ?Adminviews $adminviews = null
    ?Siteviews $siteviews = null
    ?Customadminviews $customadminviews = null
    ?Updateserver $updateserver = null
    ?Joomlamodules $modules = null
    ?Joomlaplugins $plugins = null
    ?Router $router = null
end note

note right of Data::get
  get current component data

  since: 3.2.0
  return: ?object
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

