```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class CustomButtonPermissions (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class CustomButtonPermissions << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # PermissionComponent $permissioncomponent
  # Counter $counter
  + __construct(Config $config, Language $language, ...)
  + add(object $settings, string $nameView, ...) : void
}

note right of CustomButtonPermissions::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    PermissionComponent $permissioncomponent
    Counter $counter
end note

note right of CustomButtonPermissions::add
  Add Custom Button Permissions

  since: 3.2.0
  return: void
  
  arguments:
    object $settings
    string $nameView
    string $code
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

