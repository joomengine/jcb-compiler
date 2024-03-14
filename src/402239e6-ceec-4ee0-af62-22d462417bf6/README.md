```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Router (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Router  #Gold {
  # Config $config
  # Dispenser $dispenser
  # Builder $builder
  # array $guiMapper
  # array $targets
  + __construct(Config $config, Dispenser $dispenser, ...)
  + set(object $item) : void
  # getSiteViews(array $siteViews, array $adminViews) : array
  # getSiteEditViews(?array $views) : array
  # getSiteViewAliasKey(?string $viewName, array $adminViews) : ?string
  # getSiteEditViewAliasKey(?array $fields) : ?string
  # getMainSelection(?array $gets) : array
}

note right of Router::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Dispenser $dispenser
    Builder $builder
end note

note right of Router::set
  Set Router

  since: 3.2.0
  return: void
end note

note right of Router::getSiteViews
  Get the array of site views with additional details.
This method processes each site view to enrich it with additional details such as the associated table,
alias keys, and other relevant information. The enrichment is based on the view's settings and the admin views.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteEditViews
  Get the array of site edit views
This method processes the provided admin views to extract and return an array of site edit views.
Each site edit view is constructed based on specific conditions from the admin view's settings.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteViewAliasKey
  Get the site edit view alias key value
This method fetches the alias keys for a given site edit view by matching the view name
against a list of admin views. It processes the admin views to find a match and then
retrieves the alias keys from the matched view's settings.

  since: 3.2.0
  return: ?string
end note

note right of Router::getSiteEditViewAliasKey
  Get the site view alias key value

  since: 3.2.0
  return: ?string
end note

note right of Router::getMainSelection
  Get the view (main selection) table and view name value
from the main get object

  since: 3.2.0
  return: array
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

